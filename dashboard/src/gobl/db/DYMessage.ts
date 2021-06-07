
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYMessageBase from "./base/DYMessageBase";

export default class DYMessage extends DYMessageBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYMessage", DYMessage.PREFIX, DYMessage.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYMessage | undefined {
		const cache: any = getEntityCache("DYMessage");
		return cache && cache[cacheKey];
	}
}
