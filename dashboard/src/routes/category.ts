import app from '@/app';
import { defineAsyncComponent } from 'vue';

app.pager.registerPage({
	name: 'category.add',
	routes: [
		{
			title: 'category.add',
			path: '/categories/add',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CategoryAdd.vue'),
	),
});

app.pager.registerPage({
	name: 'category.list',
	routes: [
		{
			title: 'category.item_plural',
			path: '/categories',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() =>
		import('@/components/CategoryList.vue'),
	),
});
app.pager.registerPage({
	name: 'category.view',
	routes: [
		{
			title: 'category.view',
			path: '/categories/:id/view',
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
		import('@/components/CategoryView.vue'),
	),
});
app.pager.registerPage({
	name: 'category.edit',
	routes: [
		{
			title: 'category.edit',
			path: '/categories/:id/edit',
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
		import('@/components/CategoryEdit.vue'),
	),
});
