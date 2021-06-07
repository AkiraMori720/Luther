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
				<CompanyCard :company="item" />
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

import app from '@/app';
import Loader from './required/Loader.vue';
import CompanyCard from './CompanyCard.vue';
import CompaniesStore from '@/services/companies';
import { DYCompany } from '@/gobl';
import { useStore } from '@/composables';
export default defineComponent({
	name: 'CompanyList',
	components: {
		Page,
		PageError,
		CompanyCard,
		Loader,
	},
	setup() {
		const store = useStore(),
			service = store.services.companies,
			listLoader = service.useItemListLoader(),
			{ loading, allItems, error, filters } = listLoader;

		filters.value = {
			[DYCompany.COL_TYPE]: CompaniesStore.TYPE_RESTAURANT,
		};

		watch(error, function() {
			error.value && app.view.dialog(error.value);
		});

		return {
			loading,
			allItems,
			title: 'company.list',
			emptyListErrorMessage: 'company.list_empty',
		};
	},
});
</script>
