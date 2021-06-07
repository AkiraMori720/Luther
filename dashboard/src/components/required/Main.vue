<template>
	<component :is="pageComponent" />
</template>
<script lang="ts">
import { defineComponent, computed } from 'vue';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'Main',
	setup() {
		const store = useStore(),
			pageComponent = computed(function() {
				const { page } = store;
				const c = page && page.component;
				console.log(c);
				return c;
			});

		return {
			pageComponent,
		};
	},
});
</script>
