import app from '@/app';
import { defineAsyncComponent } from 'vue';

app.pager.registerPage({
	name: 'user.sign_in',
	routes: [
		{
			title: 'sign_in.page_title',
			path: app.url.get('OW_APP_PATH_LOGIN'),
			show: false,
		},
	],
	component: defineAsyncComponent(() =>
		import('@/components/UserSignIn.vue'),
	),
});

app.pager.registerPage({
	name: 'user.sign_up',
	routes: [
		{
			title: 'sign_up.page_title',
			path: app.url.get('OW_APP_PATH_SIGN_UP'),
			show: false,
		},
	],
	component: defineAsyncComponent(() =>
		import('@/components/UserSignUp.vue'),
	),
});

app.pager.registerPage({
	name: 'user.logout',
	routes: [
		{
			title: 'logout.page_title',
			path: app.url.get('OW_APP_PATH_LOGOUT'),
			show: false,
		},
	],
	component: defineAsyncComponent(() =>
		import('@/components/UserLogout.vue'),
	),
});

app.pager.registerPage({
	name: 'dashboard',
	routes: [
		{
			title: 'dashboard.page_title',
			path: app.url.get('OW_APP_PATH_HOME'),
			show: true,
		},
	],
	requireLogin: function() {
		return true;
	},
	component: defineAsyncComponent(() => import('@/components/Dashboard.vue')),
});