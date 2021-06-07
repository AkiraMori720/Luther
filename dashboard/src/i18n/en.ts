/* eslint-disable quotes */
/* eslint-disable @typescript-eslint/camelcase */
import {OI18nDefinition} from 'oweb';

export default {
	OW_I18N_YOU_ARE_OFFLINE:
		'You are not connected. Please check your internet connection.',

	sign_in  : {
		page_title: 'Sign In',
		form_title: 'Sign In',
	},
	sign_up  : {
		page_title: 'Sign Up',
		form_title: 'Sign Up form',
	},
	logout   : 'Logout',
	dashboard: {
		page_title: 'Dashboard',
	},
	form     : {
		phone   : 'Phone',
		email   : 'E-mail',
		password: 'Password',
		sign_up : 'Validate',
		sign_in : 'Validate',

		field_file_choose  : 'Choose file...',
		field_file_n_chosen: '{name} ~ {n} files chosen.',
		field_file_browse  : 'Browse',
		add                : 'Add',
		edit               : 'Edit',
		name               : 'Name',
		price              : 'Price (USD)',
		short_description  : 'Short description',
		description        : 'Description',
		choose_image       : 'Choose an image',
		choose_images      : 'Choose images',
	},
	validate : 'Valider',

	company : {
		item_plural        : 'Restaurants',
		item_singular      : 'Restaurant',
		item_load_error    : 'Unable to load restaurant data.',
		add                : 'New Restaurant',
		added              : 'The restaurant was successfully added.',
		edit               : 'Edit restaurant',
		updated            : 'The restaurant was successfully updated.',
		list               : 'Restaurants list',
		search             : 'Search Restaurants',
		list_empty         : 'The restaurants list is currently empty.',
		list_empty_search  : 'No restaurant matches your search.',
		products_list_empty: "This restaurant hasn't published any dish yet",
	},
	category: {
		item_plural        : 'Categories',
		item_singular      : 'Category',
		item_load_error    : 'Unable to load category data.',
		add                : 'New Category',
		added              : 'The category was successfully added.',
		edit               : 'Edit category',
		updated            : 'The category was successfully updated.',
		list               : 'Category list',
		list_empty         : 'The category list is currently empty.',
		products_list_empty:
			'Currently, there is no dish available in this category.',
	},
	product : {
		item_plural      : 'Products',
		item_singular    : 'Product',
		item_load_error  : 'Unable to load product data.',
		add              : 'New product',
		add_to_cart      : 'Add to cart',
		browse: 'List product',
		remove_from_cart : 'Remove from cart',
		added            : 'The product was successfully added.',
		edit             : 'Edit product',
		updated          : 'The product was successfully updated.',
		list             : 'Product list',
		search           : 'Search Product',
		list_empty       : 'The product list is currently empty.',
		list_empty_search: 'No product matches your search.',
	},

	restaurants   : 'Restaurants',
	orders        : 'Orders',
	bills         : 'Bills',
	search        : 'Find a dish',
	deliveries    : 'Deliveries',
	dishes        : 'Dishes',
	cart          : {
		page_title:'Cart',
		is_empty: 'Your cart is empty',
		is_empty_help: 'Looks like you haven\'t made your choice yet...',
		totals: 'Totals: {total}',
		choose_location: 'Delivery Location',
		chosen_location: 'Location',
		location_address: 'Address',
		pay: 'Pay'
	},
	view          : 'View',
	edit          : 'Edit',
	delete        : 'Delete',
	delete_confirm: 'Do you really want to delete?',
	full_info     : 'Full info',

	quantity: "Quantity",

	map: {
		is_loading: 'Map is loading',
		search_placeholder: 'Enter a location',
	}
} as OI18nDefinition;
