
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYOrderDiscountBase from "./base/DYOrderDiscountBase";

export default class DYOrderDiscount extends DYOrderDiscountBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYOrderDiscount", DYOrderDiscount.PREFIX, DYOrderDiscount.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYOrderDiscount | undefined {
		const cache: any = getEntityCache("DYOrderDiscount");
		return cache && cache[cacheKey];
	}
}
