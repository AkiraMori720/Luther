<template>
	<section :class="classes">
		<Main v-if="store.ready" />
		<Freezer v-if="store.frozen" />
		<Splash v-if="store.splash" />
		<DialogView />
	</section>
</template>

<script lang="ts">
import Main from '@/components/required/Main.vue';
import Splash from '@/components/required/Splash.vue';
import Freezer from '@/components/required/Freezer.vue';
import DialogView from '@/components/required/DialogView.vue';
import { defineComponent, computed } from 'vue';
import { useStore } from '@/composables';

export default defineComponent({
	components: {
		Main,
		Freezer,
		Splash,
		DialogView,
	},
	setup() {
		const store = useStore();
		const classes = computed(() => ({
			'o-app': true,
			'o-app--frozen': store.frozen,
			'o-app--splash': store.splash,
			'o-app--ready': store.ready,
		}));

		return {
			store,
			classes,
		};
	},
});
</script>

<style lang="less">
.o-app {
	width: 100vw;
	height: 100vh;

	&--frozen,
	&--splash {
		overflow: hidden;
	}
}

@import url('./assets/styles/bundle.less');
</style>
