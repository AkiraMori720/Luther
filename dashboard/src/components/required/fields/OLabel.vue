<template>
	<label class="form-label" v-i18n="content">
		<slot v-if="hasDefaultSlot" />
	</label>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';

export default defineComponent({
	name: 'OLabel',
	props: {
		content: {
			type: String,
		},
	},
	setup(props, { slots }) {
		const hasDefaultSlot = computed(() => slots.default);

		return { hasDefaultSlot };
	},
});
</script>
