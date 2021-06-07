<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<Loader v-if="loading && !allItems.length" :full="true" />
		<PageError
			v-else-if="!allItems.length"
			:title="title"
			:error="emptyListErrorMessage"
		/>
		<div v-else class="row">
			<div
				class="col-md-6 col-xl-4"
				v-for="item in allItems"
				:key="item.id"
			>
				<CategoryCard :category="item" />
			</div>
			<div class="col-12">
				<Loader v-if="loading" />
			</div>
		</div>
	</Page>
</template>

<script lang="ts">
import { defineComponent, watch } from 'vue';
import Page from '@/components/Page.vue';
import PageError from '@/components/PageError.vue';
import Loader from './required/Loader.vue';

import app from '@/app';
import CategoryCard from './CategoryCard.vue';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'CategoryList',
	components: {
		Page,
		PageError,
		CategoryCard,
		Loader,
	},
	setup() {
		const store = useStore(),
			service = store.services.categories,
			{ loading, allItems, error, max } = service.useItemListLoader();

		watch(error, function() {
			error.value && app.view.dialog(error.value);
		});

		max.value = 100;

		return {
			loading,
			allItems,
			title: 'category.list',
			emptyListErrorMessage: 'category.list_empty',
		};
	},
});
</script>
