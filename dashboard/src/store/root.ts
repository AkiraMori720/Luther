import servicesBundle from '@/services';
import { OPageRouteFull, OViewDialog, OWebRouteContext, OWebApp } from 'oweb';
import { CustomPage } from '@/app';
import { ref, readonly, shallowRef } from 'vue';

export default class RootStore {
	protected rootState = {
		ready: ref(false),
		splash: ref(true),
		frozen: ref(false),
		page: shallowRef<CustomPage>(),
		route: shallowRef<OPageRouteFull>(),
		routeContext: shallowRef<OWebRouteContext>(),
		dialogs: ref<OViewDialog[]>([]),
	};

	readonly services: ReturnType<typeof servicesBundle>;

	constructor(context: OWebApp) {
		this.services = servicesBundle.call(context);
	}

	getState() {
		return readonly(this.rootState);
	}

	set ready(payload: boolean) {
		this.rootState.ready.value = payload;
	}

	get ready() {
		return this.rootState.ready.value;
	}

	set splash(payload: boolean) {
		this.rootState.splash.value = payload;
	}

	get splash() {
		return this.rootState.splash.value;
	}

	set frozen(payload: boolean) {
		this.rootState.frozen.value = payload;
	}

	get frozen() {
		return this.rootState.frozen.value;
	}

	set route(payload: OPageRouteFull) {
		this.rootState.route.value = payload;
	}

	get route() {
		return this.rootState.route.value as any;
	}

	set routeContext(payload: OWebRouteContext) {
		this.rootState.routeContext.value = payload;
	}

	get routeContext() {
		return this.rootState.routeContext.value as any;
	}

	set page(payload: CustomPage) {
		this.rootState.page.value = payload;
	}

	get page() {
		return this.rootState.page.value as any;
	}

	get dialogs() {
		return this.rootState.dialogs.value;
	}

	dialogRemove(dialog: OViewDialog) {
		const dialogs = this.rootState.dialogs.value;
		dialogs.splice(dialogs.indexOf(dialog), 1);
		return this;
	}
}
