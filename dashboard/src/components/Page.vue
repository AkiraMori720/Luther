<template>
	<div :class="classes">
		<div class="o-page__header">
			<PageHeader v-if="showHeader" />
			<PageNavBar v-if="showNavBar" />
		</div>
		<div class="o-page__body">
			<PageBody :body-fill="bodyFill"><slot /></PageBody>
		</div>
		<div class="o-page__footer">
			<PageFooter v-if="showFooter" />
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import PageBody from '@/components/PageBody.vue';
import PageFooter from '@/components/PageFooter.vue';
import PageNavBar from '@/components/PageNavBar.vue';
import PageHeader from '@/components/PageHeader.vue';

export default defineComponent({
	name: 'Page',
	components: {
		PageHeader,
		PageFooter,
		PageNavBar,
		PageBody,
	},
	props: {
		bodyFill: { type: Boolean, default: false },
		showHeader: { type: Boolean, default: true },
		showNavBar: { type: Boolean, default: true },
		showFooter: { type: Boolean, default: true },
	},
	setup(props) {
		const classes = computed(() => ({
			'o-page': true,
			'o-page--has-header': props.showHeader,
			'o-page--has-nav-bar': props.showFooter,
			'o-page--has-footer': props.showFooter,
		}));

		return { classes };
	},
});
</script>

<style lang="less">
.o-page {
	position: relative;
	width: 100vw;
	height: 100vh;

	&__header {
		position: absolute;
		top: 0;
		left: 0;
		width: 100vw;

		z-index: var(--z-index-header);
	}

	&__body {
		position: absolute;
		top: 0;
		left: 0;
		height: 100vh;
		width: 100vw;
		z-index: 1;
		overflow: auto;
	}

	&--has-header &__body {
		padding-top: 4rem;
		padding-bottom: 2rem;
	}
}
</style>
