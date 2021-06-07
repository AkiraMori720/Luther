<template>
	<Page :show-header="false" :show-nav-bar="false" :show-footer="false">
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Page from '@/components/Page.vue';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'UserSignUp',
	components: {
		Page,
	},

	computed: {
		step() {
			const { routeContext } = useStore(),
				step = routeContext.getToken('step');

			return step === 'three' ? 3 : step === 'two' ? 2 : 1;
		},
	},
});
</script>
