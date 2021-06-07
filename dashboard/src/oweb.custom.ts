import {
	logger,
	OPage,
	OPageRouteFull,
	ORouteStateObject,
	ORouteTarget,
	OViewDialog,
	OWebTNet,
} from 'oweb';
import app from '@/app';
import { notifyOffline } from '@/utils/helpers';

const LOGIN_PATH = app.url.get('OW_APP_PATH_LOGIN');
const SIGN_UP_PATH = app.url.get('OW_APP_PATH_SIGN_UP');
const HOME_PATH = app.url.get('OW_APP_PATH_HOME');

app.onReady(function() {
	const { router, store } = this;
	const entryPoint = location.href;

	let afterLoginPage = entryPoint;

	logger.log('[App] entry point ->', { entryPoint, afterLoginPage });

	if (router.parseURL(entryPoint).path === LOGIN_PATH) {
		// prevent next to be login if the entry point is already the login page
		afterLoginPage = router.pathToURL(HOME_PATH).href;
	}

	const tNet = new OWebTNet(this),
		next = function(path?: string, state?: ORouteStateObject) {
			store.ready = true;
			store.splash = false;
			router.start(true, path, state);
		};

	tNet.on(OWebTNet.EVT_TNET_READY, (state: string) => {
		switch (state) {
			case OWebTNet.STATE_VERIFIED_USER:
				next();
				break;
			case OWebTNet.STATE_OFFLINE_USER:
				notifyOffline();
				next(LOGIN_PATH, {
					next: afterLoginPage,
				});
				break;
			case OWebTNet.STATE_SIGN_UP_PROCESS:
				next(SIGN_UP_PATH);
				break;
			case OWebTNet.STATE_NO_USER:
				next(LOGIN_PATH, {
					next: afterLoginPage,
				});
				break;
			case OWebTNet.STATE_UNKNOWN:
				notifyOffline();
				next(LOGIN_PATH, {
					next: afterLoginPage,
				});
				break;
		}
	});
	tNet.check().catch(function() {
		notifyOffline();
		next(LOGIN_PATH, {
			next: afterLoginPage,
		});
	});
});

app.onShowHomePage(function(options: ORouteStateObject) {
	this.router.browseTo(HOME_PATH, options, false, true);
});

app.onShowLoginPage(function(options: ORouteStateObject) {
	this.router.browseTo(
		LOGIN_PATH,
		{
			next: location.href,
			...options,
		},
		false,
		true,
	);
});

app.onShowRegistrationPage(function(options: ORouteStateObject) {
	this.router.browseTo(SIGN_UP_PATH, options, false, true);
}).onPageNotFound(function(target: ORouteTarget) {
	this.router.browseTo(HOME_PATH, { target });
});

app.pager.onLocationChange((route: OPageRouteFull, page: OPage) => {
	app.store.page = page as any;
	app.store.route = route;
	app.store.routeContext = app.router.getRouteContext();
});

app.view.onFreeze(function() {
	app.store.frozen = true;
	document.body.classList.add('oweb-freeze');
});

app.view.onUnFreeze(function() {
	app.store.frozen = false;
	document.body.classList.remove('oweb-freeze');
});

app.view.onDialog(function(dialog: OViewDialog, canUseAlert: boolean) {
	const { text, data } = dialog;
	console.log(dialog);
	if (text && text.length) {
		if (canUseAlert && app.isMobileApp()) {
			alert(app.i18n.toHuman(text, data));
		} else {
			app.store.dialogs.push(dialog);
		}
	}
});
