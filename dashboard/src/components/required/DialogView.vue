<template>
	<div class="o-dialog-view" v-if="show">
		<Dialog
			v-for="dialog in dialogs"
			:key="loopKey(dialog)"
			:dialog="dialog"
		/>
	</div>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import { useStore } from '@/composables';
import Dialog from './Dialog.vue';
import { id } from 'oweb';

export default defineComponent({
	name: 'DialogView',
	components: { Dialog },
	setup() {
		const store = useStore(),
			dialogs = store.dialogs,
			show = computed(() => dialogs.length),
			loopKey = (item: any) => {
				if ('id' in item) {
					return item.id;
				}
				return (item.id = id());
			};

		return { dialogs, show, loopKey };
	},
});
</script>

<style lang="less">
.o-dialog-view {
	position: fixed;
	top: 0;
	left: 0;
	display: block;
	z-index: var(--z-index-alert);
	width: 100%;
	min-height: 30px;
	padding: 5px 20px;
	text-align: center;
}
</style>
