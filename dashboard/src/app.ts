import {OPage, logger, OWebPager, OWebApp} from 'oweb';
import { default as appConfigs } from '@/settings/app.configs';
import { default as userConfigs } from '@/settings/user.configs';
import { default as appUrlList } from '@/settings/app.urls';
import { Component, markRaw } from 'vue';
import User from '@/oweb.user';
import { OZUser } from '@/gobl';
import { storeBundle } from './store';

if (process.env.NODE_ENV === 'production') {
	logger.off();
}

export interface CustomPage extends OPage {
	component: Component | string;
}

const app = OWebApp.create({
	name: process.env.NAME,
	appConfigs,
	userConfigs,
	urls: appUrlList,
	store: storeBundle,
	user() {
		return new User<OZUser>(this);
	},
	pager() {
		return new OWebPager<CustomPage>(this);
	},
});

// for performance app should never be reactive
markRaw(app);

(window as any).app = app;

// to disable usage of app.store in component
// export default app as Omit<typeof app, 'store'>;

export default app;
