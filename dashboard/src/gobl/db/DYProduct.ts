
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYProductBase from "./base/DYProductBase";

export default class DYProduct extends DYProductBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYProduct", DYProduct.PREFIX, DYProduct.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYProduct | undefined {
		const cache: any = getEntityCache("DYProduct");
		return cache && cache[cacheKey];
	}
}
