
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import OZCountryBase from "./base/OZCountryBase";

export default class OZCountry extends OZCountryBase {
	constructor(data?: GoblEntityData) {
		super(data, "OZCountry", OZCountry.PREFIX, OZCountry.COLUMNS);
	}

	public static fromCache(cacheKey: string): OZCountry | undefined {
		const cache: any = getEntityCache("OZCountry");
		return cache && cache[cacheKey];
	}
}
