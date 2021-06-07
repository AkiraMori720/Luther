
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYOrderLineBase from "./base/DYOrderLineBase";

export default class DYOrderLine extends DYOrderLineBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYOrderLine", DYOrderLine.PREFIX, DYOrderLine.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYOrderLine | undefined {
		const cache: any = getEntityCache("DYOrderLine");
		return cache && cache[cacheKey];
	}
}
