import { Directive } from 'vue';
import app from '@/app';

const focus: Directive = {
	mounted(el, binding) {
		if (binding.value && typeof el.focus === 'function') {
			el.focus();
		}
	},
};
const i18n: Directive = {
	mounted(el: HTMLElement, binding: any) {
		binding.value && app.i18n.el(el, binding.value);
	},
	updated(el: HTMLElement, binding: any) {
		binding.value && app.i18n.el(el, binding.value);
	},
};

export default {
	focus,
	i18n,
};
