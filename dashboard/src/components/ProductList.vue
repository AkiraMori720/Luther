<template>
	<Loader v-if="loading && !allItems.length" :full="true" />
	<PageError
		v-else-if="!allItems.length"
		:title="title"
		:error="emptyListErrorMessage"
	/>
	<div v-else class="row">
		<div class="col-md-6 col-xl-4" v-for="item in allItems" :key="item.id">
			<ProductCard :product="item" />
		</div>
		<div class="col-12">
			<Loader v-if="loading" />
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent, watch, watchEffect, PropType } from 'vue';
import PageError from '@/components/PageError.vue';
import Loader from './required/Loader.vue';

import app from '@/app';
import ProductCard from './ProductCard.vue';
import { OApiFiltersMap } from 'oweb';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'ProductList',
	components: {
		PageError,
		ProductCard,
		Loader,
	},
	props: {
		filters: {
			type: Object as PropType<OApiFiltersMap>,
			required: true,
		},
		relations: {
			type: Array as PropType<string[]>,
			default: null,
		},
		collection: {
			type: String,
			default: '',
		},
		title: { type: String, default: 'product.list' },
		emptyListErrorMessage: { type: String, default: 'product.list_empty' },
	},
	setup(props) {
		const store = useStore(),
			service = store.services.products,
			{
				loading,
				allItems,
				error,
				filters,
				relations,
				collection,
			} = service.useItemListLoader();

		watch(error, function() {
			error.value && app.view.dialog(error.value);
		});

		watchEffect(() => {
			filters.value = props.filters;
			relations.value = props.relations;
			collection.value = props.collection;
		});

		return {
			loading,
			allItems,
		};
	},
});
</script>
