import { logger, OWebApp, OWebServiceStore } from 'oweb';
import { OZUser } from '@/gobl';
import app from '@/app';

export default class UsersStore extends OWebServiceStore<OZUser> {
	private busy = false;

	constructor(app: OWebApp) {
		super(app, OZUser, 'users');
		this.scheduleLoad(1000);
	}

	scheduleLoad(time = 5000) {
		const timer = setInterval(() => {
			if (app.user.userVerified()) {
				clearInterval(timer);
				this.loadCurrentUserData();
			}
		}, time);
	}

	loadCurrentUserData() {
		if (!this.busy) {
			this.busy = true;
			const user: OZUser = app.user.getCurrentUser();

			const req = this.getItemRequest(user.id, 'infos|stats');
			req.send()
				.then((response) => {
					this.busy = false;

					const infos =
						(response.json.data.relations || {}).infos || {};

					app.store.isAdmin = infos.is_admin;
					app.store.isDeliverer = infos.is_deliverer;
					app.store.categories = infos.categories;

					this.scheduleLoad(60000);
				})
				.catch(() => {
					this.busy = false;
					this.scheduleLoad(10000);
				});
		} else {
			logger.warn('[UsersStore] busy!');
		}
	}
}
