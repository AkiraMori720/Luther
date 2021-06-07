
/**
 * Auto generated file, please don't edit.
 *
 * With: gobl v1.4.1
 * Time: 1616709280
 */

import {
	GoblEntity,
	_bool,
	_int,
	_string,
} from 'gobl-utils-ts';

export default abstract class DYOrderDiscountBase extends GoblEntity {
	public static readonly PREFIX: string = 'order_discount';
	public static readonly COLUMNS: string[] = [
	'order_discount_id',
	'order_discount_user_id',
	'order_discount_order_id',
	'order_discount_order_line_id',
	'order_discount_promo_id',
	'order_discount_amount',
	'order_discount_currency_code',
	'order_discount_exchange_id',
	'order_discount_before_vat',
	'order_discount_data',
	'order_discount_add_time',
	'order_discount_update_time',
	'order_discount_valid',

	];
	public static readonly COL_ID: string = 'order_discount_id';
	public static readonly COL_USER_ID: string = 'order_discount_user_id';
	public static readonly COL_ORDER_ID: string = 'order_discount_order_id';
	public static readonly COL_ORDER_LINE_ID: string = 'order_discount_order_line_id';
	public static readonly COL_PROMO_ID: string = 'order_discount_promo_id';
	public static readonly COL_AMOUNT: string = 'order_discount_amount';
	public static readonly COL_CURRENCY_CODE: string = 'order_discount_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'order_discount_exchange_id';
	public static readonly COL_BEFORE_VAT: string = 'order_discount_before_vat';
	public static readonly COL_DATA: string = 'order_discount_data';
	public static readonly COL_ADD_TIME: string = 'order_discount_add_time';
	public static readonly COL_UPDATE_TIME: string = 'order_discount_update_time';
	public static readonly COL_VALID: string = 'order_discount_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYOrderDiscountBase.COL_ID ];
	}
	get id() { return _int(this._data[DYOrderDiscountBase.COL_ID]); }
	set id(nVal: any) { this._set(DYOrderDiscountBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYOrderDiscountBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYOrderDiscountBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get order_id() { return _int(this._data[DYOrderDiscountBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYOrderDiscountBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get order_line_id() { return _int(this._data[DYOrderDiscountBase.COL_ORDER_LINE_ID]); }
	set order_line_id(nVal: any) { this._set(DYOrderDiscountBase.COL_ORDER_LINE_ID, _int(nVal)); }
	public getOrderLineId() { return this.order_line_id; }
	public setOrderLineId(nVal: any): this { this.order_line_id = nVal; return this; }
	get promo_id() { return _int(this._data[DYOrderDiscountBase.COL_PROMO_ID]); }
	set promo_id(nVal: any) { this._set(DYOrderDiscountBase.COL_PROMO_ID, _int(nVal)); }
	public getPromoId() { return this.promo_id; }
	public setPromoId(nVal: any): this { this.promo_id = nVal; return this; }
	get amount() { return _string(this._data[DYOrderDiscountBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYOrderDiscountBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get currency_code() { return _string(this._data[DYOrderDiscountBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYOrderDiscountBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYOrderDiscountBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYOrderDiscountBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get before_vat() { return _bool(this._data[DYOrderDiscountBase.COL_BEFORE_VAT]); }
	set before_vat(nVal: any) { this._set(DYOrderDiscountBase.COL_BEFORE_VAT, _bool(nVal)); }
	public getBeforeVat() { return this.before_vat; }
	public setBeforeVat(nVal: any): this { this.before_vat = nVal; return this; }
	get data() { return _string(this._data[DYOrderDiscountBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYOrderDiscountBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYOrderDiscountBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYOrderDiscountBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYOrderDiscountBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYOrderDiscountBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYOrderDiscountBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYOrderDiscountBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
