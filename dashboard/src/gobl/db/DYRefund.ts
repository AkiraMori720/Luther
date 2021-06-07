
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import { getEntityCache, GoblEntityData } from "gobl-utils-ts";
import DYRefundBase from "./base/DYRefundBase";

export default class DYRefund extends DYRefundBase {
	constructor(data?: GoblEntityData) {
		super(data, "DYRefund", DYRefund.PREFIX, DYRefund.COLUMNS);
	}

	public static fromCache(cacheKey: string): DYRefund | undefined {
		const cache: any = getEntityCache("DYRefund");
		return cache && cache[cacheKey];
	}
}
