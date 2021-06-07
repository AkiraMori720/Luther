<template>
	<Page :show-header="false" :show-nav-bar="false" :show-footer="false">

				<div class="flex-fill d-flex flex-column justify-content-center">
					<div class="container-tight py-6">
						<div class="text-center mb-4">
							<img :src="logoSrc" height="36" alt=""/>
						</div>
						<OForm class="card-md" :form="form" @submit="login"/>
					</div>
				</div>
	</Page>
</template>

<script lang="ts">
	import {defineComponent, ref, computed} from 'vue';
	import app from '@/app';
	import {OWebLogin} from 'oweb';
	import Page from '@/components/Page.vue';
	import {routeLink} from '@/utils/helpers';
	import {signInForm} from '@/forms';
	import {appLogoFull} from '@/assets';
	import OForm from './required/forms/OForm.vue';

	export default defineComponent({
		name      : '	UserSignIn',
		components: {
			Page,
			OForm,
		},
		props     : {
			withEmail: {
				type   : Boolean,
				default: false,
			},
		},
		setup(props) {
			const logoSrc = ref(appLogoFull),
				  form    = computed(() => signInForm(props.withEmail));

			return {
				form,
				logoSrc,
			};
		},

		methods: {
			async login(event: any) {
				const form: HTMLFormElement = event.target,
					  ofv                   = app.getFormValidator(
						  form,
						  [this.withEmail ? 'email' : 'phone', 'pass'],
						  [],
						  false,
					  );

				if (ofv.validate()) {
					const login = new OWebLogin(app);

					app.view.freeze();

					login
						.onLoginSuccess((response) => {
							app.view.unfreeze();
							const {data, stime} = response.json;
							app.user.setCurrentUser(data);
							stime && app.user.setSessionExpire(stime);

							setTimeout(() => {
								this.finish();
							}, 500);
						})
						.onLoginFail(function (err) {
							app.view.unfreeze();
							app.view.dialog(err);
						});

					if (this.withEmail) {
						await login
							.loginWithEmail({
								email: ofv.getField('email'),
								pass : ofv.getField('pass'),
							})
							.catch(() => void 0);
					} else {
						await login
							.loginWithPhone({
								phone: ofv.getField('phone'),
								pass : ofv.getField('pass'),
							})
							.catch(() => void 0);
					}
				}
			},

			finish() {
				const rCtx    = app.store.routeContext,
					  _return =
						  rCtx.getStateItem('return') ||
						  rCtx.getSearchParam('return'),
					  next    = (rCtx.getStateItem('next') ||
								 rCtx.getSearchParam('next') ||
								 routeLink(app.url.get('OW_APP_PATH_HOME'))) as string;

				if (_return) {
					app.router.goBack();
				} else {
					if (rCtx.getSearchParam('auth')) {
						(window as any).location = next;

						return;
					}
					app.router.browseTo(next, undefined, false);
				}
			},
		},
	});
</script>
