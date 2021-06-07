
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYChatBase from "./base/DYChatBase";

export default class DYChat extends DYChatBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYChat", DYChat.PREFIX, DYChat.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYChat | undefined {
		const cache: any = getEntityCache("DYChat");
		return cache && cache[cacheKey];
	}
}
