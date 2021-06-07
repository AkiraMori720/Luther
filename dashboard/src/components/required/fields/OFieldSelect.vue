<template>
	<div>
		<OLabel
			v-if="options.label"
			v-bind="options.label.attrs"
			:content="options.label.i18n"
			:for="fieldId"
		/>
		<select
			class="form-select"
			ref="select"
			v-bind="options.attrs"
			:value="realValue"
			@input="handleInput"
			v-i18n="options.i18n"
			:id="fieldId"
		>
			<option
				v-for="(opt, index) in options.options"
				:key="index"
				v-bind="opt.attrs"
				v-i18n="opt.i18n"
			></option>
		</select>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';
import OLabel from './OLabel.vue';

export default defineComponent({
	components: { OLabel },
	name: 'OFieldSelect',
	mixins: [OField],
	props: {
		type: {
			type: String,
			default: 'text',
		},
	},
	mounted() {
		//	const $select: any = $(this.$refs.select as HTMLSelectElement);
		//$select.selectize();
	},
});
</script>
