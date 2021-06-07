import { OWebApp } from 'oweb';
import { DYProduct } from '@/gobl';
import ServiceStore from './base';
import { productAddForm, productEditForm } from '@/forms';

export default class ProductsStore extends ServiceStore<DYProduct> {
	constructor(app: OWebApp) {
		super(app, DYProduct, 'products');
	}

	buildAddForm() {
		return productAddForm();
	}

	buildEditForm(item: DYProduct) {
		return productEditForm(item);
	}
}
