
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYCurrencyBase from "./base/DYCurrencyBase";

export default class DYCurrency extends DYCurrencyBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYCurrency", DYCurrency.PREFIX, DYCurrency.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYCurrency | undefined {
		const cache: any = getEntityCache("DYCurrency");
		return cache && cache[cacheKey];
	}
}
