/* eslint-disable @typescript-eslint/camelcase */
import app from '@/app';
import {DYCategory, DYCompany, DYProduct} from '@/gobl';

export const signInForm = (withEmail = true) => {
	const email  = {
			  field: 'input',
			  attrs: {
				  name        : 'email',
				  type        : 'email',
				  autofocus   : 'autofocus',
				  autocomplete: 'off',
			  },
			  label: {i18n: 'form.email'},
		  },
		  phone  = {
			  field: 'phone',
			  attrs: {
				  name        : 'phone',
				  autofocus   : 'autofocus',
				  autocomplete: 'off',
			  },
			  label: {i18n: 'form.phone'},
		  },
		  pass   = {
			  field: 'input',
			  label: {i18n: 'form.password'},
			  attrs: {
				  'name'            : 'pass',
				  'type'            : 'password',
				  'data-oweb-form-v': 'login_pass',
			  },
		  },
		  submit = {
			  field: 'submit',
			  i18n : 'form.sign_in',
		  };

	return {
		fields: withEmail ? {email, pass, submit} : {phone, pass, submit},
	};
};

export const signUpForm = (withEmail = true) => {
	const uname      = {
			  field: 'input',
			  label: {i18n: 'OO_LANG_USER_NAME'},
			  attrs: {name: 'uname', type: 'text', autofocus: 'autofocus'},
		  },
		  phone      = {
			  field: 'phone',
			  attrs: {
				  name        : 'phone',
				  autocomplete: 'off',
			  },
			  label: {i18n: 'form.phone'},
		  },
		  email      = {
			  field: 'input',
			  label: {i18n: 'form.email'},
			  attrs: {name: 'email', type: 'email'},
		  },
		  pass       = {
			  field: 'input',
			  label: {i18n: 'form.password'},
			  attrs: {name: 'pass', type: 'password'},
		  },
		  vpass      = {
			  field: 'input',
			  label: {i18n: 'form.password_confirm'},
			  attrs: {name: 'vpass', type: 'password'},
		  },
		  birth_date = {
			  field: 'input',
			  label: {i18n: 'form.birth_date'},
			  attrs: {name: 'birth_date', type: 'date'},
		  },
		  gender     = {
			  field  : 'select',
			  label  : {i18n: 'form.gender'},
			  attrs  : {name: 'gender'},
			  options: [
				  {
					  attrs: {
						  value   : 'Male',
						  selected: '',
					  },
					  i18n : 'form.male',
				  },
				  {
					  attrs: {value: 'Female'},
					  i18n : 'form.female',
				  },
			  ],
		  },
		  submit     = {field: 'submit', i18n: 'form.validate'};

	return {
		fields: {
			[withEmail ? 'email' : 'phone']: withEmail ? email : phone,
			uname,
			birth_date,
			gender,
			pass,
			vpass,
			submit,
		},
	};
};

const name             = (attrs: any = {}) => ({
		  field: 'input',
		  attrs: {
			  name        : 'name',
			  autofocus   : 'autofocus',
			  autocomplete: 'off',
			  ...attrs,
		  },
		  label: {i18n: 'form.name'},
	  }),
	  shortDescription = (attrs: any = {}) => ({
		  field: 'textarea',
		  attrs: {
			  name        : 'short_description',
			  autocomplete: 'off',
			  minlength   : 5,
			  maxlength   : 140,
			  rows        : 3,
			  ...attrs,
		  },
		  label: {i18n: 'form.short_description'},
	  }),
	  description      = (attrs: any = {}) => ({
		  field: 'textarea',
		  attrs: {
			  name        : 'description',
			  autocomplete: 'off',
			  minlength   : 5,
			  maxlength   : 1000,
			  rows        : 6,
			  ...attrs,
		  },
		  label: {i18n: 'form.description'},
	  }),
	  price            = (attrs: any = {}) => ({
		  field: 'input',
		  attrs: {
			  name: 'price',
			  type: 'number',
			  min : 0,
			  ...attrs,
		  },
		  label: {i18n: 'form.price'},
	  }),
	  image            = (attrs: any = {}) => ({
		  field: 'file',
		  attrs: {
			  name  : 'image',
			  accept: 'image/jpeg,image/png',
			  ...attrs,
		  },
		  label: {i18n: 'form.choose_image'},
	  }),
	  images           = (attrs: any = {}) => ({
		  field: 'file',
		  attrs: {
			  name    : 'images',
			  multiple: true,
			  accept  : 'image/jpeg,image/png',
			  ...attrs,
		  },
		  label: {i18n: 'form.choose_images'},
	  }),
	  submitAdd        = () => ({
		  field: 'submit',
		  i18n : 'form.add',
	  }),
	  submitEdit       = () => ({
		  field: 'submit',
		  i18n : 'form.edit',
	  }),
	  categorySelect   = (attrs: any = {}) => {
		  const categories: DYCategory[] = app.store.categories,
				options                  = categories.map(function (category) {
					return {
						attrs: {
							value: category.id,
						},
						i18n : category.name,
					};
				});
		  return {
			  field: 'select',
			  label: {i18n: 'category.item_singular'},
			  attrs,
			  options,
		  };
	  };

export const companyAddForm  = () => {
	return {
		title   : 'company.add',
		fields  : {
			[DYCompany.COL_NAME]             : name({name: DYCompany.COL_NAME}),
			[DYCompany.COL_SHORT_DESCRIPTION]: shortDescription({
				name: DYCompany.COL_SHORT_DESCRIPTION,
			}),
			[DYCompany.COL_DESCRIPTION]      : description({
				name: DYCompany.COL_DESCRIPTION,
			}),
			[DYCompany.COL_IMAGE]            : image({name: DYCompany.COL_IMAGE}),
			submit                           : submitAdd(),
		},
		required: [
			DYCompany.COL_NAME,
			DYCompany.COL_SHORT_DESCRIPTION,
			DYCompany.COL_DESCRIPTION,
		],
	};
};
export const companyEditForm = (item: DYCompany) => {
	return {
		title   : 'company.edit',
		fields  : {
			[DYCompany.COL_NAME]             : name({
				name : DYCompany.COL_NAME,
				value: item.name,
			}),
			[DYCompany.COL_SHORT_DESCRIPTION]: shortDescription({
				name : DYCompany.COL_SHORT_DESCRIPTION,
				value: item.short_description,
			}),
			[DYCompany.COL_DESCRIPTION]      : description({
				name : DYCompany.COL_DESCRIPTION,
				value: item.description,
			}),
			[DYCompany.COL_IMAGE]            : image({name: DYCompany.COL_IMAGE}),
			submit                           : submitEdit(),
		},
		required: [
			DYCompany.COL_NAME,
			DYCompany.COL_SHORT_DESCRIPTION,
			DYCompany.COL_DESCRIPTION,
		],
	};
};

export const categoryAddForm  = () => {
	return {
		title   : 'category.add',
		fields  : {
			[DYCategory.COL_NAME]             : name({name: DYCategory.COL_NAME}),
			[DYCategory.COL_SHORT_DESCRIPTION]: shortDescription({
				name: DYCategory.COL_SHORT_DESCRIPTION,
			}),
			[DYCategory.COL_DESCRIPTION]      : description({
				name: DYCategory.COL_DESCRIPTION,
			}),
			[DYCategory.COL_IMAGE]            : image({name: DYCategory.COL_IMAGE}),
			submit                            : submitAdd(),
		},
		required: [
			DYCategory.COL_NAME,
			DYCategory.COL_SHORT_DESCRIPTION,
			DYCategory.COL_DESCRIPTION,
		],
	};
};
export const categoryEditForm = (item: DYCategory) => {
	return {
		title   : 'category.edit',
		fields  : {
			[DYCategory.COL_NAME]             : name({
				name : DYCategory.COL_NAME,
				value: item.name,
			}),
			[DYCategory.COL_SHORT_DESCRIPTION]: shortDescription({
				name : DYCategory.COL_SHORT_DESCRIPTION,
				value: item.short_description,
			}),
			[DYCategory.COL_DESCRIPTION]      : description({
				name : DYCategory.COL_DESCRIPTION,
				value: item.description,
			}),
			[DYCategory.COL_IMAGE]            : image({name: DYCategory.COL_IMAGE}),
			submit                            : submitEdit(),
		},
		required: [
			DYCategory.COL_NAME,
			DYCategory.COL_SHORT_DESCRIPTION,
			DYCategory.COL_DESCRIPTION,
		],
	};
};

export const productAddForm  = () => {
	return {
		title   : 'product.add',
		fields  : {
			[DYProduct.COL_CATEGORY_ID]: categorySelect({
				name: DYProduct.COL_CATEGORY_ID,
			}),
			[DYProduct.COL_NAME]       : name({name: DYProduct.COL_NAME}),

			[DYProduct.COL_SHORT_DESCRIPTION]: shortDescription({
				name: DYProduct.COL_SHORT_DESCRIPTION,
			}),
			[DYProduct.COL_DESCRIPTION]      : description({
				name: DYProduct.COL_DESCRIPTION,
			}),
			[DYProduct.COL_PRICE]            : price({name: DYProduct.COL_PRICE}),
			[DYProduct.COL_IMAGES]           : images({name: DYProduct.COL_IMAGES}),
			submit                           : submitAdd(),
		},
		required: [
			DYProduct.COL_NAME,
			DYProduct.COL_SHORT_DESCRIPTION,
			DYProduct.COL_DESCRIPTION,
			DYProduct.COL_PRICE,
		],
	};
};
export const productEditForm = (item: DYProduct) => {
	return {
		title   : 'product.edit',
		fields  : {
			[DYProduct.COL_CATEGORY_ID]      : categorySelect({
				name : DYProduct.COL_CATEGORY_ID,
				value: item.category_id,
			}),
			[DYProduct.COL_NAME]             : name({
				name : DYProduct.COL_NAME,
				value: item.name,
			}),
			[DYProduct.COL_SHORT_DESCRIPTION]: shortDescription({
				name : DYProduct.COL_SHORT_DESCRIPTION,
				value: item.short_description,
			}),
			[DYProduct.COL_DESCRIPTION]      : description({
				name : DYProduct.COL_DESCRIPTION,
				value: item.description,
			}),
			[DYProduct.COL_PRICE]            : price({
				name : DYProduct.COL_PRICE,
				value: item.price,
			}),
			[DYProduct.COL_IMAGES]           : images({name: DYProduct.COL_IMAGES}),
			submit                           : submitEdit(),
		},
		required: [
			DYProduct.COL_NAME,
			DYProduct.COL_SHORT_DESCRIPTION,
			DYProduct.COL_DESCRIPTION,
			DYProduct.COL_PRICE,
		],
	};
};
