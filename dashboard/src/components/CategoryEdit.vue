<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true" :body-fill="true">
		<Loader v-if="loading && !item" :full="true" />
		<PageError
			v-else-if="!item"
			:title="title"
			:error="itemLoadErrorMessage"
		/>
		<CategoryEditForm v-else :category="item" />
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Page from '@/components/Page.vue';
import PageError from '@/components/PageError.vue';
import Loader from '@/components/required/Loader.vue';
import CategoryEditForm from './CategoryEditForm.vue';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'CategoryEdit',
	components: {
		Page,
		PageError,
		Loader,
		CategoryEditForm,
	},
	setup() {
		const store = useStore(),
			service = store.services.categories,
			{ loading, error, item, id } = service.useItemLoader();

		id.value = store.routeContext.getToken('id');

		return { loading, error, item };
	},
});
</script>
