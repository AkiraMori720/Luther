import { OWebApp } from 'oweb';

const checkUpdate = (app: OWebApp) => {
	const updater = app.ls.get('updater') || {},
		now = Date.now() / 1000,
		aDay = 86400,
		lastShow = app.ls.get('updater_last_show') || 0;
	let show = false;

	if (updater.shouldUpdate) {
		if (updater.forceUpdate) {
			show = true;
		} else if (now - lastShow >= aDay) {
			show = true;
		}
	}

	if (show) {
		app.ls.set('updater_last_show', now);
		app.router.browseTo('/app/update', undefined, false);
	}
};

export { checkUpdate };
