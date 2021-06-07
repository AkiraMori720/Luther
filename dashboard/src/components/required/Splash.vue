<template>
	<div class="o-splash">
		<img src="../../assets/images/ke-284x284.png" />
		<Loader :full="true" :white="true" />
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Loader from './Loader.vue';

export default defineComponent({
	components: { Loader },
	name: 'Splash',
});
</script>

<style lang="less">
.o-splash {
	position: fixed;
	top: 0;
	left: 0;
	z-index: var(--z-index-splash);
	width: 100vw;
	height: 100vh;
	padding: 40vh 40vw;
	background-color: var(--main-color-bg);
}
</style>
