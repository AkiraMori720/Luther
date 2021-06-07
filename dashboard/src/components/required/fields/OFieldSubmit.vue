<template>
	<button
		type="submit"
		class="btn btn-primary btn-block"
		v-bind="options.attrs"
		v-i18n="options.i18n"
	></button>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';

export default defineComponent({
	name: 'OFieldSubmit',
	mixins: [OField],
	props: {
		type: {
			type: String,
			default: 'button',
		},
	},
});
</script>
