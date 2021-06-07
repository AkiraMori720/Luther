
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYPubBase from "./base/DYPubBase";

export default class DYPub extends DYPubBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYPub", DYPub.PREFIX, DYPub.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYPub | undefined {
		const cache: any = getEntityCache("DYPub");
		return cache && cache[cacheKey];
	}
}
