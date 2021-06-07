<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true" :body-fill="true">
		<div class="flex-fill d-flex flex-column justify-content-center">
			<div class="container-tight py-6">
				<OForm
					class="card-md"
					:form="form"
					@submit.prevent="sendForm"
				/>
			</div>
		</div>
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import app from '@/app';
import Page from '@/components/Page.vue';
import OForm from '@/components/required/forms/OForm.vue';
import { DYProduct } from '@/gobl';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'ProductAdd',
	components: {
		Page,
		OForm,
	},
	setup() {
		const store = useStore(),
			service = store.services.products,
			companyId = store.routeContext.getToken('id');

		return service.useAddForm({
			onFormValidated(ofv) {
				ofv.setField(DYProduct.COL_CURRENCY_CODE, 'USD');
				ofv.setField(DYProduct.COL_COMPANY_ID, companyId);
			},
			onRequestCreated(req) {
				req.onGoodNews(function() {
					app.router.goBack();
					app.view.dialog({
						type: 'done',
						text: 'product.added',
					});
				});
			},
		});
	},
});
</script>
