import { OWebApp, OWebServiceStore } from 'oweb';
import { DYDelivery } from '@/gobl';

export default class DeliveriesStore extends OWebServiceStore<DYDelivery> {
	constructor(app: OWebApp) {
		super(app, DYDelivery, 'deliveries');
	}
}
