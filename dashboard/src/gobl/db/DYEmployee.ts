
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYEmployeeBase from "./base/DYEmployeeBase";

export default class DYEmployee extends DYEmployeeBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYEmployee", DYEmployee.PREFIX, DYEmployee.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYEmployee | undefined {
		const cache: any = getEntityCache("DYEmployee");
		return cache && cache[cacheKey];
	}
}
