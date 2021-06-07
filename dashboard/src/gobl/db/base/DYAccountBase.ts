
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

export default abstract class DYAccountBase extends GoblEntity {
	public static readonly PREFIX: string = 'account';
	public static readonly COLUMNS: string[] = [
	'account_id',
	'account_user_id',
	'account_balance',
	'account_currency_code',
	'account_data',
	'account_add_time',
	'account_update_time',
	'account_valid',

	];
	public static readonly COL_ID: string = 'account_id';
	public static readonly COL_USER_ID: string = 'account_user_id';
	public static readonly COL_BALANCE: string = 'account_balance';
	public static readonly COL_CURRENCY_CODE: string = 'account_currency_code';
	public static readonly COL_DATA: string = 'account_data';
	public static readonly COL_ADD_TIME: string = 'account_add_time';
	public static readonly COL_UPDATE_TIME: string = 'account_update_time';
	public static readonly COL_VALID: string = 'account_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYAccountBase.COL_ID ];
	}
	get id() { return _int(this._data[DYAccountBase.COL_ID]); }
	set id(nVal: any) { this._set(DYAccountBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYAccountBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYAccountBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get balance() { return _string(this._data[DYAccountBase.COL_BALANCE]); }
	set balance(nVal: any) { this._set(DYAccountBase.COL_BALANCE, _string(nVal)); }
	public getBalance() { return this.balance; }
	public setBalance(nVal: any): this { this.balance = nVal; return this; }
	get currency_code() { return _string(this._data[DYAccountBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYAccountBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get data() { return _string(this._data[DYAccountBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYAccountBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYAccountBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYAccountBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYAccountBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYAccountBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYAccountBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYAccountBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
