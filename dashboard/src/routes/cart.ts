import app from '@/app';
import {defineAsyncComponent} from 'vue';

app.pager.registerPage({
	name: 'cart',
	routes: [
		{
			title: 'cart.page_title',
			path: '/cart',
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() => import('@/components/UserCart.vue')),
});
