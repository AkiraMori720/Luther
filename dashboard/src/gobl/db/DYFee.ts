
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYFeeBase from "./base/DYFeeBase";

export default class DYFee extends DYFeeBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYFee", DYFee.PREFIX, DYFee.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYFee | undefined {
		const cache: any = getEntityCache("DYFee");
		return cache && cache[cacheKey];
	}
}
