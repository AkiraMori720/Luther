import { logger, OWebApp } from 'oweb';
import CategoriesStore from './categories';
import CompaniesStore from './companies';
import ProductsStore from './products';
import UsersStore from './users';

export default function servicesBundle(this: OWebApp) {
	logger.info('[App][%s] services bundle created.', this.getAppName());

	return {
		users: new UsersStore(this),
		companies: new CompaniesStore(this),
		categories: new CategoriesStore(this),
		products: new ProductsStore(this),
	};
}
