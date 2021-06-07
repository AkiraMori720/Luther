
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

export default abstract class DYVatBase extends GoblEntity {
	public static readonly PREFIX: string = 'vat';
	public static readonly COLUMNS: string[] = [
	'vat_id',
	'vat_company_id',
	'vat_type',
	'vat_name',
	'vat_value',
	'vat_data',
	'vat_add_time',
	'vat_update_time',
	'vat_valid',

	];
	public static readonly COL_ID: string = 'vat_id';
	public static readonly COL_COMPANY_ID: string = 'vat_company_id';
	public static readonly COL_TYPE: string = 'vat_type';
	public static readonly COL_NAME: string = 'vat_name';
	public static readonly COL_VALUE: string = 'vat_value';
	public static readonly COL_DATA: string = 'vat_data';
	public static readonly COL_ADD_TIME: string = 'vat_add_time';
	public static readonly COL_UPDATE_TIME: string = 'vat_update_time';
	public static readonly COL_VALID: string = 'vat_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYVatBase.COL_ID ];
	}
	get id() { return _int(this._data[DYVatBase.COL_ID]); }
	set id(nVal: any) { this._set(DYVatBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get company_id() { return _int(this._data[DYVatBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYVatBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get type() { return _string(this._data[DYVatBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYVatBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get name() { return _string(this._data[DYVatBase.COL_NAME]); }
	set name(nVal: any) { this._set(DYVatBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get value() { return _string(this._data[DYVatBase.COL_VALUE]); }
	set value(nVal: any) { this._set(DYVatBase.COL_VALUE, _string(nVal)); }
	public getValue() { return this.value; }
	public setValue(nVal: any): this { this.value = nVal; return this; }
	get data() { return _string(this._data[DYVatBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYVatBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYVatBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYVatBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYVatBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYVatBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYVatBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYVatBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
