
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYCategoryBase from "./base/DYCategoryBase";

export default class DYCategory extends DYCategoryBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYCategory", DYCategory.PREFIX, DYCategory.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYCategory | undefined {
		const cache: any = getEntityCache("DYCategory");
		return cache && cache[cacheKey];
	}
}
