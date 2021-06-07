import app from '@/app';
import { defineAsyncComponent } from 'vue';

app.pager.registerPage({
	name: 'company.add',
	routes: [
		{
			title: 'company.add',
			path: '/companies/add',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CompanyAdd.vue'),
	),
});

app.pager.registerPage({
	name: 'company.list',
	routes: [
		{
			title: 'company.item_plural',
			path: '/companies',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CompanyList.vue'),
	),
});

app.pager.registerPage({
	name: 'company.view',
	routes: [
		{
			title: 'company.view',
			path: '/companies/:id/view',
			pathOptions: {
				id: 'num',
			},
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CompanyView.vue'),
	),
});

app.pager.registerPage({
	name: 'product.add',
	routes: [
		{
			title: 'product.add',
			path: '/companies/:id/add-product',
			pathOptions: {
				id: 'num',
			},
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/ProductAdd.vue'),
	),
});

app.pager.registerPage({
	name: 'company.edit',
	routes: [
		{
			title: 'company.edit',
			path: '/companies/:id/edit',
			pathOptions: {
				id: 'num',
			},
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CompanyEdit.vue'),
	),
});
