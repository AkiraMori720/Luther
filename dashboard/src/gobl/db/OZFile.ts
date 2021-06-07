
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import OZFileBase from "./base/OZFileBase";

export default class OZFile extends OZFileBase {
	constructor(data?: GoblEntityData) {
		super(data, "OZFile", OZFile.PREFIX, OZFile.COLUMNS);
	}

	public static fromCache(cacheKey: string): OZFile | undefined {
		const cache: any = getEntityCache("OZFile");
		return cache && cache[cacheKey];
	}
}
