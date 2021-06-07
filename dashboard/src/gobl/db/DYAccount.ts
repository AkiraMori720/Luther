
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYAccountBase from "./base/DYAccountBase";

export default class DYAccount extends DYAccountBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYAccount", DYAccount.PREFIX, DYAccount.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYAccount | undefined {
		const cache: any = getEntityCache("DYAccount");
		return cache && cache[cacheKey];
	}
}
