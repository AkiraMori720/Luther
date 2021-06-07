
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYExchangeBase from "./base/DYExchangeBase";

export default class DYExchange extends DYExchangeBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYExchange", DYExchange.PREFIX, DYExchange.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYExchange | undefined {
		const cache: any = getEntityCache("DYExchange");
		return cache && cache[cacheKey];
	}
}
