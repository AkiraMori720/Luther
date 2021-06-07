
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import OZUserBase from "./base/OZUserBase";

export default class OZUser extends OZUserBase {
	constructor(data?: GoblEntityData) {
		super(data, "OZUser", OZUser.PREFIX, OZUser.COLUMNS);
	}

	public static fromCache(cacheKey: string): OZUser | undefined {
		const cache: any = getEntityCache("OZUser");
		return cache && cache[cacheKey];
	}
}
