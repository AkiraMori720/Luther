<template>
	<div class="o-freezer">

		<Loader :full="true" />
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Loader from './Loader.vue';

export default defineComponent({
	components: { Loader },
	name: 'Freezer',
});
</script>

<style lang="less">
.o-freezer {
	position: fixed;
	top: 0;
	left: 0;
	z-index: var(--z-index-modal);
	width: 100vw;
	height: 100vh;
	padding: 40vh 40vw;
	background-color: var(--freezing-bg);
}
</style>
