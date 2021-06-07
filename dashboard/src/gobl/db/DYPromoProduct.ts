
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYPromoProductBase from "./base/DYPromoProductBase";

export default class DYPromoProduct extends DYPromoProductBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYPromoProduct", DYPromoProduct.PREFIX, DYPromoProduct.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYPromoProduct | undefined {
		const cache: any = getEntityCache("DYPromoProduct");
		return cache && cache[cacheKey];
	}
}
