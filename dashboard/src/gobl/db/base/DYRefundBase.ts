
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

export default abstract class DYRefundBase extends GoblEntity {
	public static readonly PREFIX: string = 'refund';
	public static readonly COLUMNS: string[] = [
	'refund_id',
	'refund_order_id',
	'refund_order_line_id',
	'refund_payment_id',
	'refund_transaction_id',
	'refund_type',
	'refund_reason',
	'refund_amount',
	'refund_currency_code',
	'refund_exchange_id',
	'refund_data',
	'refund_add_time',
	'refund_update_time',
	'refund_valid',

	];
	public static readonly COL_ID: string = 'refund_id';
	public static readonly COL_ORDER_ID: string = 'refund_order_id';
	public static readonly COL_ORDER_LINE_ID: string = 'refund_order_line_id';
	public static readonly COL_PAYMENT_ID: string = 'refund_payment_id';
	public static readonly COL_TRANSACTION_ID: string = 'refund_transaction_id';
	public static readonly COL_TYPE: string = 'refund_type';
	public static readonly COL_REASON: string = 'refund_reason';
	public static readonly COL_AMOUNT: string = 'refund_amount';
	public static readonly COL_CURRENCY_CODE: string = 'refund_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'refund_exchange_id';
	public static readonly COL_DATA: string = 'refund_data';
	public static readonly COL_ADD_TIME: string = 'refund_add_time';
	public static readonly COL_UPDATE_TIME: string = 'refund_update_time';
	public static readonly COL_VALID: string = 'refund_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYRefundBase.COL_ID ];
	}
	get id() { return _int(this._data[DYRefundBase.COL_ID]); }
	set id(nVal: any) { this._set(DYRefundBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get order_id() { return _int(this._data[DYRefundBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYRefundBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get order_line_id() { return _int(this._data[DYRefundBase.COL_ORDER_LINE_ID]); }
	set order_line_id(nVal: any) { this._set(DYRefundBase.COL_ORDER_LINE_ID, _int(nVal)); }
	public getOrderLineId() { return this.order_line_id; }
	public setOrderLineId(nVal: any): this { this.order_line_id = nVal; return this; }
	get payment_id() { return _int(this._data[DYRefundBase.COL_PAYMENT_ID]); }
	set payment_id(nVal: any) { this._set(DYRefundBase.COL_PAYMENT_ID, _int(nVal)); }
	public getPaymentId() { return this.payment_id; }
	public setPaymentId(nVal: any): this { this.payment_id = nVal; return this; }
	get transaction_id() { return _int(this._data[DYRefundBase.COL_TRANSACTION_ID]); }
	set transaction_id(nVal: any) { this._set(DYRefundBase.COL_TRANSACTION_ID, _int(nVal)); }
	public getTransactionId() { return this.transaction_id; }
	public setTransactionId(nVal: any): this { this.transaction_id = nVal; return this; }
	get type() { return _string(this._data[DYRefundBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYRefundBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get reason() { return _string(this._data[DYRefundBase.COL_REASON]); }
	set reason(nVal: any) { this._set(DYRefundBase.COL_REASON, _string(nVal)); }
	public getReason() { return this.reason; }
	public setReason(nVal: any): this { this.reason = nVal; return this; }
	get amount() { return _string(this._data[DYRefundBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYRefundBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get currency_code() { return _string(this._data[DYRefundBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYRefundBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYRefundBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYRefundBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get data() { return _string(this._data[DYRefundBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYRefundBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYRefundBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYRefundBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYRefundBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYRefundBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYRefundBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYRefundBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
