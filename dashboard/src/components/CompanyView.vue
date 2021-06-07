<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<Loader v-if="loading && !item" :full="true" />
		<PageError
			v-else-if="!item"
			:title="title"
			:error="itemLoadErrorMessage"
		/>
		<div v-else>
			<CompanyCard :full="true" :company="item" />
			<ProductList
				:filters="productsFilters"
				:empty-list-error-message="emptyListErrorMessage"
			/>
		</div>
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Page from '@/components/Page.vue';
import PageError from '@/components/PageError.vue';
import Loader from '@/components/required/Loader.vue';
import CompanyCard from './CompanyCard.vue';
import ProductList from './ProductList.vue';
import { DYProduct } from '@/gobl';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'CompanyView',
	components: {
		Page,
		PageError,
		Loader,
		ProductList,
		CompanyCard,
	},
	setup() {
		const store = useStore(),
			service = store.services.companies,
			{ loading, error, item, id } = service.useItemLoader();

		id.value = store.routeContext.getToken('id');

		return {
			title: 'company.item_singular',
			itemLoadErrorMessage: 'company.item_load_error',
			emptyListErrorMessage: 'company.products_list_empty',
			productsFilters: {
				[DYProduct.COL_COMPANY_ID]: id.value,
			},

			loading,
			error,
			item,
		};
	},
});
</script>
