
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

export default abstract class DYCurrencyBase extends GoblEntity {
	public static readonly PREFIX: string = 'currency';
	public static readonly COLUMNS: string[] = [
	'currency_code',
	'currency_symbol',
	'currency_name',
	'currency_name_real',
	'currency_mantissa',
	'currency_data',
	'currency_add_time',
	'currency_update_time',
	'currency_valid',

	];
	public static readonly COL_CODE: string = 'currency_code';
	public static readonly COL_SYMBOL: string = 'currency_symbol';
	public static readonly COL_NAME: string = 'currency_name';
	public static readonly COL_NAME_REAL: string = 'currency_name_real';
	public static readonly COL_MANTISSA: string = 'currency_mantissa';
	public static readonly COL_DATA: string = 'currency_data';
	public static readonly COL_ADD_TIME: string = 'currency_add_time';
	public static readonly COL_UPDATE_TIME: string = 'currency_update_time';
	public static readonly COL_VALID: string = 'currency_valid';

	public singlePKValue() {
		return this.code;
	}
	public identifierColumns() {
		return [ DYCurrencyBase.COL_CODE ];
	}
	get code() { return _string(this._data[DYCurrencyBase.COL_CODE]); }
	set code(nVal: any) { this._set(DYCurrencyBase.COL_CODE, _string(nVal)); }
	public getCode() { return this.code; }
	public setCode(nVal: any): this { this.code = nVal; return this; }
	get symbol() { return _string(this._data[DYCurrencyBase.COL_SYMBOL]); }
	set symbol(nVal: any) { this._set(DYCurrencyBase.COL_SYMBOL, _string(nVal)); }
	public getSymbol() { return this.symbol; }
	public setSymbol(nVal: any): this { this.symbol = nVal; return this; }
	get name() { return _string(this._data[DYCurrencyBase.COL_NAME]); }
	set name(nVal: any) { this._set(DYCurrencyBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get name_real() { return _string(this._data[DYCurrencyBase.COL_NAME_REAL]); }
	set name_real(nVal: any) { this._set(DYCurrencyBase.COL_NAME_REAL, _string(nVal)); }
	public getNameReal() { return this.name_real; }
	public setNameReal(nVal: any): this { this.name_real = nVal; return this; }
	get mantissa() { return _int(this._data[DYCurrencyBase.COL_MANTISSA]); }
	set mantissa(nVal: any) { this._set(DYCurrencyBase.COL_MANTISSA, _int(nVal)); }
	public getMantissa() { return this.mantissa; }
	public setMantissa(nVal: any): this { this.mantissa = nVal; return this; }
	get data() { return _string(this._data[DYCurrencyBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYCurrencyBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYCurrencyBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYCurrencyBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYCurrencyBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYCurrencyBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYCurrencyBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYCurrencyBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
