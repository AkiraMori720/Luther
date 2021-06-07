
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

export default abstract class DYOrderLineBase extends GoblEntity {
	public static readonly PREFIX: string = 'order_line';
	public static readonly COLUMNS: string[] = [
	'order_line_id',
	'order_line_order_id',
	'order_line_product_id',
	'order_line_company_id',
	'order_line_quantity',
	'order_line_price',
	'order_line_currency_code',
	'order_line_exchange_id',
	'order_line_state',
	'order_line_data',
	'order_line_add_time',
	'order_line_update_time',
	'order_line_valid',

	];
	public static readonly COL_ID: string = 'order_line_id';
	public static readonly COL_ORDER_ID: string = 'order_line_order_id';
	public static readonly COL_PRODUCT_ID: string = 'order_line_product_id';
	public static readonly COL_COMPANY_ID: string = 'order_line_company_id';
	public static readonly COL_QUANTITY: string = 'order_line_quantity';
	public static readonly COL_PRICE: string = 'order_line_price';
	public static readonly COL_CURRENCY_CODE: string = 'order_line_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'order_line_exchange_id';
	public static readonly COL_STATE: string = 'order_line_state';
	public static readonly COL_DATA: string = 'order_line_data';
	public static readonly COL_ADD_TIME: string = 'order_line_add_time';
	public static readonly COL_UPDATE_TIME: string = 'order_line_update_time';
	public static readonly COL_VALID: string = 'order_line_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYOrderLineBase.COL_ID ];
	}
	get id() { return _int(this._data[DYOrderLineBase.COL_ID]); }
	set id(nVal: any) { this._set(DYOrderLineBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get order_id() { return _int(this._data[DYOrderLineBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYOrderLineBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get product_id() { return _string(this._data[DYOrderLineBase.COL_PRODUCT_ID]); }
	set product_id(nVal: any) { this._set(DYOrderLineBase.COL_PRODUCT_ID, _string(nVal)); }
	public getProductId() { return this.product_id; }
	public setProductId(nVal: any): this { this.product_id = nVal; return this; }
	get company_id() { return _int(this._data[DYOrderLineBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYOrderLineBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get quantity() { return _string(this._data[DYOrderLineBase.COL_QUANTITY]); }
	set quantity(nVal: any) { this._set(DYOrderLineBase.COL_QUANTITY, _string(nVal)); }
	public getQuantity() { return this.quantity; }
	public setQuantity(nVal: any): this { this.quantity = nVal; return this; }
	get price() { return _string(this._data[DYOrderLineBase.COL_PRICE]); }
	set price(nVal: any) { this._set(DYOrderLineBase.COL_PRICE, _string(nVal)); }
	public getPrice() { return this.price; }
	public setPrice(nVal: any): this { this.price = nVal; return this; }
	get currency_code() { return _string(this._data[DYOrderLineBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYOrderLineBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYOrderLineBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYOrderLineBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get state() { return _string(this._data[DYOrderLineBase.COL_STATE]); }
	set state(nVal: any) { this._set(DYOrderLineBase.COL_STATE, _string(nVal)); }
	public getState() { return this.state; }
	public setState(nVal: any): this { this.state = nVal; return this; }
	get data() { return _string(this._data[DYOrderLineBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYOrderLineBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYOrderLineBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYOrderLineBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYOrderLineBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYOrderLineBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYOrderLineBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYOrderLineBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
