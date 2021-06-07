<template>
	<label class="form-check">
		<input
			class="form-check-input"
			type="checkbox"
			ref="field"
			v-bind="options.attrs"
			:value="realValue"
			@input="handleInput"
			:checked="checked"
			v-i18n="options.i18n"
			:id="fieldId"
		/>
		<span
			class="form-check-label"
			v-if="options.label"
			v-bind="options.label.attrs"
			v-i18n="options.label.i18n"
		></span>
	</label>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';

export default defineComponent({
	name: 'OFieldCheckbox',
	mixins: [OField],
	props: {
		checked: {
			type: Boolean,
		},
	},
	watch: {
		checked(val) {
			const input = this.$refs.field as HTMLInputElement;

			input.checked = !!val;
		},
	},
});
</script>
