<template>
	<form class="card" @submit.prevent="$emit('submit', $event)">
		<div v-if="form.title" class="card-header">
			<h3 class="card-title align-center" v-i18n="form.title"></h3>
		</div>
		<div class="card-body">
			<div
				class="my-3"
				v-for="(fieldOpt, fieldName) in form.fields"
				:key="fieldName"
			>
				<component
					:is="getComponent(fieldOpt)"
					:name="fieldName"
					:options="fieldOpt"
					v-model="formDataReal[fieldName]"
					@update:modelValue="handleFieldValue(fieldName, $event)"
				></component>
			</div>
		</div>
	</form>
</template>

<script lang="ts">
import { defineComponent, computed, reactive, watch } from 'vue';
import OFieldButton from '../fields/OFieldButton.vue';
import OFieldCheckbox from '../fields/OFieldCheckbox.vue';
import OFieldFile from '../fields/OFieldFile.vue';
import OFieldInput from '../fields/OFieldInput.vue';
import OFieldPhone from '../fields/OFieldPhone.vue';
import OFieldRadio from '../fields/OFieldRadio.vue';
import OFieldSelect from '../fields/OFieldSelect.vue';
import OFieldTextarea from '../fields/OFieldTextarea.vue';
import OFieldSubmit from '../fields/OFieldSubmit.vue';
import { forEach } from 'oweb';

export default defineComponent({
	name: 'OForm',
	emits: ['submit', 'update:modelValue'],
	props: {
		form: { type: Object, required: true },
		modelValue: { type: Object, default: () => ({}) },
	},
	components: {
		OFieldButton,
		OFieldCheckbox,
		OFieldFile,
		OFieldInput,
		OFieldPhone,
		OFieldRadio,
		OFieldSelect,
		OFieldTextarea,
		OFieldSubmit,
	},
	setup(props, { emit }) {
		const formData = reactive({} as any),
			formDataReal = computed(function() {
				const tmp: any = {};

				forEach(props.form.fields, function(opt: any, name) {
					tmp[name] = undefined;
				});

				return { ...tmp, ...props.modelValue };
			}),
			handleFieldValue = (fieldName: string, value: any) => {
				formData[fieldName] = value;
			};

		watch(formData, function(val) {
			emit('update:modelValue', val);
		});

		return { formDataReal, handleFieldValue };
	},
	methods: {
		getComponent(opt: any) {
			return 'o-field-' + opt.field;
		},
	},
});
</script>
