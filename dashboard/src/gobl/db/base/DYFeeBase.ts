
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

export default abstract class DYFeeBase extends GoblEntity {
	public static readonly PREFIX: string = 'fee';
	public static readonly COLUMNS: string[] = [
	'fee_id',
	'fee_order_id',
	'fee_order_line_id',
	'fee_vat_id',
	'fee_delivery_id',
	'fee_type',
	'fee_amount',
	'fee_currency_code',
	'fee_exchange_id',
	'fee_before_vat',
	'fee_data',
	'fee_add_time',
	'fee_update_time',
	'fee_valid',

	];
	public static readonly COL_ID: string = 'fee_id';
	public static readonly COL_ORDER_ID: string = 'fee_order_id';
	public static readonly COL_ORDER_LINE_ID: string = 'fee_order_line_id';
	public static readonly COL_VAT_ID: string = 'fee_vat_id';
	public static readonly COL_DELIVERY_ID: string = 'fee_delivery_id';
	public static readonly COL_TYPE: string = 'fee_type';
	public static readonly COL_AMOUNT: string = 'fee_amount';
	public static readonly COL_CURRENCY_CODE: string = 'fee_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'fee_exchange_id';
	public static readonly COL_BEFORE_VAT: string = 'fee_before_vat';
	public static readonly COL_DATA: string = 'fee_data';
	public static readonly COL_ADD_TIME: string = 'fee_add_time';
	public static readonly COL_UPDATE_TIME: string = 'fee_update_time';
	public static readonly COL_VALID: string = 'fee_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYFeeBase.COL_ID ];
	}
	get id() { return _int(this._data[DYFeeBase.COL_ID]); }
	set id(nVal: any) { this._set(DYFeeBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get order_id() { return _int(this._data[DYFeeBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYFeeBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get order_line_id() { return _int(this._data[DYFeeBase.COL_ORDER_LINE_ID]); }
	set order_line_id(nVal: any) { this._set(DYFeeBase.COL_ORDER_LINE_ID, _int(nVal)); }
	public getOrderLineId() { return this.order_line_id; }
	public setOrderLineId(nVal: any): this { this.order_line_id = nVal; return this; }
	get vat_id() { return _int(this._data[DYFeeBase.COL_VAT_ID]); }
	set vat_id(nVal: any) { this._set(DYFeeBase.COL_VAT_ID, _int(nVal)); }
	public getVatId() { return this.vat_id; }
	public setVatId(nVal: any): this { this.vat_id = nVal; return this; }
	get delivery_id() { return _int(this._data[DYFeeBase.COL_DELIVERY_ID]); }
	set delivery_id(nVal: any) { this._set(DYFeeBase.COL_DELIVERY_ID, _int(nVal)); }
	public getDeliveryId() { return this.delivery_id; }
	public setDeliveryId(nVal: any): this { this.delivery_id = nVal; return this; }
	get type() { return _string(this._data[DYFeeBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYFeeBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get amount() { return _string(this._data[DYFeeBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYFeeBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get currency_code() { return _string(this._data[DYFeeBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYFeeBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYFeeBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYFeeBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get before_vat() { return _bool(this._data[DYFeeBase.COL_BEFORE_VAT]); }
	set before_vat(nVal: any) { this._set(DYFeeBase.COL_BEFORE_VAT, _bool(nVal)); }
	public getBeforeVat() { return this.before_vat; }
	public setBeforeVat(nVal: any): this { this.before_vat = nVal; return this; }
	get data() { return _string(this._data[DYFeeBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYFeeBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYFeeBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYFeeBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYFeeBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYFeeBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYFeeBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYFeeBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
