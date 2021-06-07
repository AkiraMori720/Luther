import { OWebApp } from 'oweb';
import { DYCompany } from '@/gobl';
import ServiceStore from './base';
import { companyAddForm, companyEditForm } from '@/forms';

export default class CompaniesStore extends ServiceStore<DYCompany> {
	static TYPE_RESTAURANT = 'restaurant';

	constructor(app: OWebApp) {
		super(app, DYCompany, 'companies');
	}

	buildAddForm() {
		return companyAddForm();
	}

	buildEditForm(item: DYCompany) {
		return companyEditForm(item);
	}
}
