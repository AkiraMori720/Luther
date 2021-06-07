
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYPaymentBase from "./base/DYPaymentBase";

export default class DYPayment extends DYPaymentBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYPayment", DYPayment.PREFIX, DYPayment.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYPayment | undefined {
		const cache: any = getEntityCache("DYPayment");
		return cache && cache[cacheKey];
	}
}
