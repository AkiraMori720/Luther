
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import OZAdminBase from "./base/OZAdminBase";

export default class OZAdmin extends OZAdminBase {
	constructor(data?: GoblEntityData) {
		super(data, "OZAdmin", OZAdmin.PREFIX, OZAdmin.COLUMNS);
	}

	public static fromCache(cacheKey: string): OZAdmin | undefined {
		const cache: any = getEntityCache("OZAdmin");
		return cache && cache[cacheKey];
	}
}
