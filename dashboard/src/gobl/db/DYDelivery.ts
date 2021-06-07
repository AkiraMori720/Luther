
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYDeliveryBase from "./base/DYDeliveryBase";

export default class DYDelivery extends DYDeliveryBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYDelivery", DYDelivery.PREFIX, DYDelivery.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYDelivery | undefined {
		const cache: any = getEntityCache("DYDelivery");
		return cache && cache[cacheKey];
	}
}
