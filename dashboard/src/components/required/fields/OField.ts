import app from '@/app';
import { id, logger } from 'oweb';
import { defineComponent } from 'vue';

const hasOwn = Object.prototype.hasOwnProperty;

export default defineComponent({
	name: 'OField',
	emits: ['update:modelValue'],
	props: {
		name: {
			type: String,
			required: true,
		},
		options: {
			type: Object,
			required: true,
		},
		modelValue: {
			type: String,
			//required: true,
		},
	},
	data: function() {
		return {
			isValidated: false,
			isValid: false,
			hasValue: false,
			realValue: null as any,
			fieldId: id(),
		};
	},
	created() {
		if (this.modelValue === undefined || this.modelValue === null) {
			let _value = null; //this.value;
			if (this.options.attrs && 'value' in this.options.attrs) {
				_value = this.options.attrs.value;
			}

			if (_value !== null) {
				this.realValue = _value;
			}
		}
	},
	watch: {
		realValue: function(val, oldVal) {
			if (val != oldVal) {
				this.$emit('update:modelValue', val);
			}
		},
	},
	methods: {
		shouldAutoValidate: function() {
			return !~['checkbox', 'radio', 'button'].indexOf(
				this.options.field,
			);
		},
		getFormEl() {
			return $(this.$el)
				.parents('form')
				.get(0);
		},
		extractFieldLabelText: function(ele: HTMLFormElement, name: string){
			for(let i = 0 ; i< ele.elements.length; i++){
				const item = ele.elements.item(i) as HTMLInputElement;
				if(item && item.name === name){
					return item.value;
				}
			}
			return null;
		},
		handleValue: function(val: any) {
			if (this.shouldAutoValidate()) {
				const fieldName = this.name,
					formEl = this.getFormEl(),
					form = {
						[fieldName]: {
							value: val,
							label: formEl
								? this.extractFieldLabelText(formEl, fieldName)
								: fieldName,
						},
					},
					o = app.getFormValidator(formEl, [fieldName], [], true);

				let valid = true;

				if (!o.validate()) {
					const errors = o.getErrors();
					if (errors[fieldName] && errors[fieldName].length) {
						logger.warn('[OField] error :', errors);
						valid = false;
					}
				}

				val = o.getField(fieldName);

				this.isValid = valid;
				this.isValidated = true;
			}

			this.hasValue = Boolean(
				typeof val === 'number' || // is: a number
					(val && // is not: false | null | undefined
						(!hasOwn.call(val, 'length') || val.length)), // is not: an empty array
			);

			this.realValue = val;
		},
		handleInput(event: any) {
			this.handleValue(event.target.value);
		},
	},
});
