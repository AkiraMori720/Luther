<template>
	<button
		:type="type"
		class="btn btn-primary"
		v-bind="options.attrs"
		:value="realValue"
		@input="handleInput"
		v-i18n="options.i18n"
	></button>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';

export default defineComponent({
	name: 'OFieldButton',
	mixins: [OField],
	props: {
		type: {
			type: String,
			default: 'button',
		},
	},
});
</script>
