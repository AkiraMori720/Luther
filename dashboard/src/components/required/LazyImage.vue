<template>
	<div class="o-lazy-image">
		<div
			v-if="asBackground"
			class="o-lazy-image__bg"
			v-bind="$attrs"
			:style="bgStyles"
		></div>
		<img v-else class="o-lazy-image__img" v-bind="$attrs" :src="imageSrc" />
	</div>
</template>

<script lang="ts">
import { defineComponent, ref, watchEffect, computed } from 'vue';
import { lazyImagePlaceholder } from '../../assets';

/**
 * TODO add custom lazy load type from here: https://jmperezperez.com/svg-placeholders/
 */
export default defineComponent({
	name: 'ImageLazy',
	inheritAttrs: false,
	props: {
		src: { type: String, required: true },
		fallbackSrc: { type: String, default: '' },
		loadingSrc: { type: String, default: '' },
		asBackground: { type: Boolean, default: false },
	},
	setup(props) {
		const loadedSrc = ref(''),
			loading = ref(false),
			error = ref(false),
			imageSrc = computed(() => {
				return (
					loadedSrc.value ||
					(loading.value && props.loadingSrc) ||
					(error.value && props.fallbackSrc) ||
					lazyImagePlaceholder
				);
			}),
			bgStyles = computed(() => {
				return {
					backgroundImage: `url(${imageSrc.value})`,
				};
			});

		watchEffect(function() {
			const image = new Image();

			image.onload = () => {
				loading.value = false;
				loadedSrc.value = image.src;
			};
			image.onerror = () => {
				loading.value = false;
				error.value = true;
			};

			loading.value = true;

			image.src = props.src;
		});

		return {
			imageSrc,
			bgStyles,
			loading,
			error,
		};
	},
});
</script>

<style lang="less">
.o-lazy-image {
	width: 100%;
	height: 100%;

	&__img {
		max-width: 100%;
		max-height: 100%;
	}
	&__bg {
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		max-width: 100%;
		max-height: 100%;
	}
}
</style>
