<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<Loader v-if="loading && !item" :full="true" />
		<PageError
			v-else-if="!item"
			:title="title"
			:error="itemLoadErrorMessage"
		/>
		<div v-else>
			<CategoryCard :full="true" :category="item" />
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
import CategoryCard from './CategoryCard.vue';
import ProductList from './ProductList.vue';
import { DYProduct } from '@/gobl';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'CategoryView',
	components: {
		Page,
		PageError,
		Loader,
		ProductList,
		CategoryCard,
	},
	setup() {
		const store = useStore(),
			service = store.services.categories,
			{ loading, error, item, id } = service.useItemLoader();

		id.value = store.routeContext.getToken('id');

		return {
			title: 'category.item_singular',
			itemLoadErrorMessage: 'category.item_load_error',
			emptyListErrorMessage: 'category.products_list_empty',
			productsFilters: {
				[DYProduct.COL_CATEGORY_ID]: id.value,
			},

			loading,
			error,
			item,
		};
	},
});
</script>
