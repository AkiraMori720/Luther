
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYDelivererBase from "./base/DYDelivererBase";

export default class DYDeliverer extends DYDelivererBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYDeliverer", DYDeliverer.PREFIX, DYDeliverer.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYDeliverer | undefined {
		const cache: any = getEntityCache("DYDeliverer");
		return cache && cache[cacheKey];
	}
}
