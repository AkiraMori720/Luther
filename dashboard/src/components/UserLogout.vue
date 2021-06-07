<template>
	<Page
		:show-header="false"
		:show-nav-bar="false"
		:show-footer="false"
	></Page>
</template>

<script lang="ts">
import { defineComponent, onMounted } from 'vue';
import app from '@/app';
import { OWebLogout } from 'oweb';
import Page from '@/components/Page.vue';

export default defineComponent({
	name: 'UserLogout',
	components: {
		Page,
	},
	setup() {
		const logout = async function() {
			if (!app.user.userVerified()) {
				return app.showHomePage();
			}

			const logout = new OWebLogout(app);
			logout.onLogoutSuccess(function() {
				setTimeout(function() {
					app.destroyApp();
				});
			});

			logout.onLogoutFail(function(err) {
				app.view.dialog(err);
				app.router.goBack();
			});

			app.view.freeze();
			await logout.logout();
			app.view.unfreeze();
		};

		onMounted(logout);

		return {};
	},
});
</script>
