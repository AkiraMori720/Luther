import app from '@/app';
import { defineAsyncComponent } from 'vue';

app.pager.registerPage({
	name: 'product.view',
	routes: [
		{
			title: 'product.view',
			path: '/products/:id/view',
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
		import('@/components/ProductView.vue'),
	),
});

app.pager.registerPage({
	name: 'product.list',
	routes: [
		{
			title: 'product.item_plural',
			path: '/products/discover',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/ProductDiscover.vue'),
	),
});

app.pager.registerPage({
	name: 'product.edit',
	routes: [
		{
			title: 'product.edit',
			path: '/products/:id/edit',
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
		import('@/components/ProductEdit.vue'),
	),
});
