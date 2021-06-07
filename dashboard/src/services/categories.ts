import { categoryAddForm, categoryEditForm } from './../forms/index';
import { OWebApp } from 'oweb';
import { DYCategory } from '@/gobl';
import ServiceStore from './base';

export default class CategoriesStore extends ServiceStore<DYCategory> {
	static TYPE_PRODUCT = 'product';

	constructor(app: OWebApp) {
		super(app, DYCategory, 'categories');
	}

	buildAddForm() {
		return categoryAddForm();
	}

	buildEditForm(item: DYCategory) {
		return categoryEditForm(item);
	}
}
