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
			type="tel"
			v-bind="options.attrs"
			:value="formattedPhone"
			@input="handlePhoneInput"
			v-i18n="options.i18n"
			:id="fieldId"
		/>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';
import OLabel from './OLabel.vue';
import OWebTelInput from 'oweb-tel-input';

export default defineComponent({
	components: { OLabel },
	name: 'OFieldPhone',
	mixins: [OField],

	computed: {
		formattedPhone: function(): string {
			return this.formatPhone(this.realValue);
		},
	},
	methods: {
		formatPhone(phoneNumber: string) {
			const formatter = new OWebTelInput({ phoneNumber });
			return formatter.setPhoneNumber(phoneNumber).getInput(true);
		},
		handlePhoneInput: function(event: any) {
			this.handleValue(this.formatPhone(event.target.value));
		},
	},
});
</script>
