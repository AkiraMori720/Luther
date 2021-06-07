
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYPromoBase from "./base/DYPromoBase";

export default class DYPromo extends DYPromoBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYPromo", DYPromo.PREFIX, DYPromo.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYPromo | undefined {
		const cache: any = getEntityCache("DYPromo");
		return cache && cache[cacheKey];
	}
}
