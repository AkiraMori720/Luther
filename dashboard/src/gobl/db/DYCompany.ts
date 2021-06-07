
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYCompanyBase from "./base/DYCompanyBase";

export default class DYCompany extends DYCompanyBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYCompany", DYCompany.PREFIX, DYCompany.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYCompany | undefined {
		const cache: any = getEntityCache("DYCompany");
		return cache && cache[cacheKey];
	}
}
