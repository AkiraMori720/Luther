<template>
	<div>
		<OLabel
			v-if="options.label"
			v-bind="options.label.attrs"
			:content="options.label.i18n"
			:for="fieldId"
		/>

		<textarea
			class="form-control"
			v-bind="options.attrs"
			:value="realValue"
			@input="handleInput"
			v-i18n="options.i18n"
			:id="fieldId"
		></textarea>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import OField from './OField';
import OLabel from './OLabel.vue';

export default defineComponent({
	components: { OLabel },
	name: 'OFieldTextarea',
	mixins: [OField],
});
</script>
