
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYTransactionBase from "./base/DYTransactionBase";

export default class DYTransaction extends DYTransactionBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYTransaction", DYTransaction.PREFIX, DYTransaction.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYTransaction | undefined {
		const cache: any = getEntityCache("DYTransaction");
		return cache && cache[cacheKey];
	}
}
