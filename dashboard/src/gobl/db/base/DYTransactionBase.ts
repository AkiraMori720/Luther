
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

export default abstract class DYTransactionBase extends GoblEntity {
	public static readonly PREFIX: string = 'transaction';
	public static readonly COLUMNS: string[] = [
	'transaction_id',
	'transaction_ref',
	'transaction_user_id',
	'transaction_type',
	'transaction_amount',
	'transaction_currency_code',
	'transaction_exchange_id',
	'transaction_state',
	'transaction_data',
	'transaction_add_time',
	'transaction_update_time',
	'transaction_valid',

	];
	public static readonly COL_ID: string = 'transaction_id';
	public static readonly COL_REF: string = 'transaction_ref';
	public static readonly COL_USER_ID: string = 'transaction_user_id';
	public static readonly COL_TYPE: string = 'transaction_type';
	public static readonly COL_AMOUNT: string = 'transaction_amount';
	public static readonly COL_CURRENCY_CODE: string = 'transaction_currency_code';
	public static readonly COL_EXCHANGE_ID: string = 'transaction_exchange_id';
	public static readonly COL_STATE: string = 'transaction_state';
	public static readonly COL_DATA: string = 'transaction_data';
	public static readonly COL_ADD_TIME: string = 'transaction_add_time';
	public static readonly COL_UPDATE_TIME: string = 'transaction_update_time';
	public static readonly COL_VALID: string = 'transaction_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYTransactionBase.COL_ID ];
	}
	get id() { return _int(this._data[DYTransactionBase.COL_ID]); }
	set id(nVal: any) { this._set(DYTransactionBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get ref() { return _string(this._data[DYTransactionBase.COL_REF]); }
	set ref(nVal: any) { this._set(DYTransactionBase.COL_REF, _string(nVal)); }
	public getRef() { return this.ref; }
	public setRef(nVal: any): this { this.ref = nVal; return this; }
	get user_id() { return _string(this._data[DYTransactionBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYTransactionBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get type() { return _string(this._data[DYTransactionBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYTransactionBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get amount() { return _string(this._data[DYTransactionBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYTransactionBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get currency_code() { return _string(this._data[DYTransactionBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYTransactionBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get exchange_id() { return _int(this._data[DYTransactionBase.COL_EXCHANGE_ID]); }
	set exchange_id(nVal: any) { this._set(DYTransactionBase.COL_EXCHANGE_ID, _int(nVal)); }
	public getExchangeId() { return this.exchange_id; }
	public setExchangeId(nVal: any): this { this.exchange_id = nVal; return this; }
	get state() { return _string(this._data[DYTransactionBase.COL_STATE]); }
	set state(nVal: any) { this._set(DYTransactionBase.COL_STATE, _string(nVal)); }
	public getState() { return this.state; }
	public setState(nVal: any): this { this.state = nVal; return this; }
	get data() { return _string(this._data[DYTransactionBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYTransactionBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYTransactionBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYTransactionBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYTransactionBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYTransactionBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYTransactionBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYTransactionBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
