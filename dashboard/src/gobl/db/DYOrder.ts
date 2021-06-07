
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYOrderBase from "./base/DYOrderBase";

export default class DYOrder extends DYOrderBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYOrder", DYOrder.PREFIX, DYOrder.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYOrder | undefined {
		const cache: any = getEntityCache("DYOrder");
		return cache && cache[cacheKey];
	}
}
