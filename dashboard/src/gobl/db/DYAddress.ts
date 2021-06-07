
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYAddressBase from "./base/DYAddressBase";

export default class DYAddress extends DYAddressBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYAddress", DYAddress.PREFIX, DYAddress.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYAddress | undefined {
		const cache: any = getEntityCache("DYAddress");
		return cache && cache[cacheKey];
	}
}
