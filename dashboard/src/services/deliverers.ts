import { OWebApp, OWebServiceStore } from 'oweb';
import { DYDeliverer } from '@/gobl';

export default class DeliverersStore extends OWebServiceStore<DYDeliverer> {
	constructor(app: OWebApp) {
		super(app, DYDeliverer, 'deliverers');
	}
}
