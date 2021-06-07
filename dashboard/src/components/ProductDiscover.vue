<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<ProductList :filters="filters" />
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Page from '@/components/Page.vue';
import ProductList from './ProductList.vue';

export default defineComponent({
	name: 'ProductDiscover',
	components: {
		Page,
		ProductList,
	},
	setup() {
		return {
			filters: {},
		};
	},
});
</script>
