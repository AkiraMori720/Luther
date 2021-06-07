
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYVatBase from "./base/DYVatBase";

export default class DYVat extends DYVatBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYVat", DYVat.PREFIX, DYVat.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYVat | undefined {
		const cache: any = getEntityCache("DYVat");
		return cache && cache[cacheKey];
	}
}
