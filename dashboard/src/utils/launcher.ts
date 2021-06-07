import { OWebApp } from 'oweb';

export default (app: OWebApp) => {
	const event = app.isMobileApp() ? 'deviceready' : 'DOMContentLoaded',
		deviceReady = () => {
			document.removeEventListener(event, deviceReady);
			setTimeout(app.start.bind(app), 500);
		},
		launch = () => {
			if (!app.isMobileApp() && document.readyState === 'complete') {
				deviceReady();
				return;
			}

			document.addEventListener(event, deviceReady, false);
		};

	return {
		launch,
		deviceReady,
	};
};
