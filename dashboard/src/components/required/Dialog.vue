<template>
	<div :class="classes" v-i18n="dialog"></div>
</template>

<script lang="ts">
import { defineComponent, computed, onMounted, onUnmounted } from 'vue';
import { useStore } from '@/composables';

export default defineComponent({
	name: 'Dialog',
	props: {
		dialog: { type: Object, required: true },
		duration: { type: Number, default: 5000 },
	},
	setup(props) {
		const store = useStore(),
			classes = computed(() => [
				'o-dialog',
				'o-dialog--' + props.dialog.type,
			]);

		let timeout: any = null;

		const selfRemove = () => {
			store.dialogRemove(props.dialog as any);
		};

		onMounted(() => {
			timeout = setTimeout(() => selfRemove(), props.duration);
		});

		onUnmounted(() => {
			clearTimeout(timeout);
		});

		return { classes };
	},
});
</script>

<style lang="less">
.o-dialog {
	display: inline-block;
	padding: 5px;
	border-radius: 3px;
	min-width: 60%;
	max-width: 100%;
	background: black;
	font-size: 16px;
	font-weight: bold;
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.4);

	&--done {
		background: var(--success-color-bg);
		color: var(--success-color-txt);
	}

	&--info {
		background: var(--info-color-bg);
		color: var(--info-color-txt);
	}

	&--error {
		background: var(--error-color-bg);
		color: var(--error-color-txt);
	}
}
</style>
