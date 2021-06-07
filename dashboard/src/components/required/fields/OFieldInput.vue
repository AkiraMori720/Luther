<template>
	<div>
		<OLabel
			v-if="options.label"
			v-bind="options.label.attrs"
			:content="options.label.i18n"
			:for="fieldId"
		/>

		<input
			class="form-control"
			:type="type"
			v-bind="options.attrs"
			:value="realValue"
			@input="handleInput"
			v-i18n="options.i18n"
			:id="fieldId"
		/>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';
import OLabel from './OLabel.vue';

export default defineComponent({
	components: { OLabel },
	name: 'OFieldInput',
	mixins: [OField],
	props: {
		type: {
			type: String,
			default: 'text',
		},
	},
});
</script>
