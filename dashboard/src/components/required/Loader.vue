<template>
	<div :class="classes">
		<img v-if="white" class="o-loader__image"  src="../../assets/images/loader-white.svg" />
		<img v-else class="o-loader__image" src="../../assets/images/loader.svg" />
	</div>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';

export default defineComponent({
	name: 'Loader',
	props: {
		full: { type: Boolean, default: false },
		white: { type: Boolean, default: false },
	},

	setup(props) {
		const classes = computed(() => ({
			'o-loader': true,
			'o-loader--full': props.full,
		}));

		return { classes };
	},
});
</script>

<style lang="less">
.o-loader {
	margin: 0 auto;

	&__image {
		max-width: 50%;
	}

	&--full {
		height: 100%;
		width: 100%;
		display: flex;
		justify-content: center;
		align-content: center;
	}
}
</style>
