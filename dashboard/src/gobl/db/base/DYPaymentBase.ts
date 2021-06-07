
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

export default abstract class DYPaymentBase extends GoblEntity {
	public static readonly PREFIX: string = 'payment';
	public static readonly COLUMNS: string[] = [
	'payment_id',
	'payment_ref',
	'payment_order_id',
	'payment_amount',
	'payment_currency_code',
	'payment_exchange_id',
	'payment_data',
	'payment_add_time',
	'payment_update_time',
	'payment_valid',

	];
	public static readonly COL_ID: string = 'payment_id';
	public static readonly COL_REF: string = 'payment_ref';
	public static readonly COL_ORDER_ID: string = 'payment_order_id';
	public static readonly COL_AMOUNT: string = 'payment_amount';
	public static readonly COL_CURRENCY_CODE: string = 'payment_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'payment_exchange_id';
	public static readonly COL_DATA: string = 'payment_data';
	public static readonly COL_ADD_TIME: string = 'payment_add_time';
	public static readonly COL_UPDATE_TIME: string = 'payment_update_time';
	public static readonly COL_VALID: string = 'payment_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYPaymentBase.COL_ID ];
	}
	get id() { return _int(this._data[DYPaymentBase.COL_ID]); }
	set id(nVal: any) { this._set(DYPaymentBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get ref() { return _string(this._data[DYPaymentBase.COL_REF]); }
	set ref(nVal: any) { this._set(DYPaymentBase.COL_REF, _string(nVal)); }
	public getRef() { return this.ref; }
	public setRef(nVal: any): this { this.ref = nVal; return this; }
	get order_id() { return _int(this._data[DYPaymentBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYPaymentBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get amount() { return _string(this._data[DYPaymentBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYPaymentBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get currency_code() { return _string(this._data[DYPaymentBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYPaymentBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYPaymentBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYPaymentBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get data() { return _string(this._data[DYPaymentBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYPaymentBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYPaymentBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYPaymentBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYPaymentBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYPaymentBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYPaymentBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYPaymentBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
