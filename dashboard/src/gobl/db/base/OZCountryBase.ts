
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

export default abstract class OZCountryBase extends GoblEntity {
	public static readonly PREFIX: string = 'country';
	public static readonly COLUMNS: string[] = [
	'country_cc2',
	'country_code',
	'country_name',
	'country_name_real',
	'country_data',
	'country_add_time',
	'country_valid',

	];
	public static readonly COL_CC2: string = 'country_cc2';
	public static readonly COL_CODE: string = 'country_code';
	public static readonly COL_NAME: string = 'country_name';
	public static readonly COL_NAME_REAL: string = 'country_name_real';
	public static readonly COL_DATA: string = 'country_data';
	public static readonly COL_ADD_TIME: string = 'country_add_time';
	public static readonly COL_VALID: string = 'country_valid';

	public singlePKValue() {
		return this.cc2;
	}
	public identifierColumns() {
		return [ OZCountryBase.COL_CC2 ];
	}
	get cc2() { return _string(this._data[OZCountryBase.COL_CC2]); }
	set cc2(nVal: any) { this._set(OZCountryBase.COL_CC2, _string(nVal)); }
	public getCc2() { return this.cc2; }
	public setCc2(nVal: any): this { this.cc2 = nVal; return this; }
	get code() { return _string(this._data[OZCountryBase.COL_CODE]); }
	set code(nVal: any) { this._set(OZCountryBase.COL_CODE, _string(nVal)); }
	public getCode() { return this.code; }
	public setCode(nVal: any): this { this.code = nVal; return this; }
	get name() { return _string(this._data[OZCountryBase.COL_NAME]); }
	set name(nVal: any) { this._set(OZCountryBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get name_real() { return _string(this._data[OZCountryBase.COL_NAME_REAL]); }
	set name_real(nVal: any) { this._set(OZCountryBase.COL_NAME_REAL, _string(nVal)); }
	public getNameReal() { return this.name_real; }
	public setNameReal(nVal: any): this { this.name_real = nVal; return this; }
	get data() { return _string(this._data[OZCountryBase.COL_DATA]); }
	set data(nVal: any) { this._set(OZCountryBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[OZCountryBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(OZCountryBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get valid() { return _bool(this._data[OZCountryBase.COL_VALID]); }
	set valid(nVal: any) { this._set(OZCountryBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
