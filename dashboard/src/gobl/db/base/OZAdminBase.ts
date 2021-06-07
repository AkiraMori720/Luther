
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

export default abstract class OZAdminBase extends GoblEntity {
	public static readonly PREFIX: string = 'admin';
	public static readonly COLUMNS: string[] = [
	'admin_user_id',
	'admin_level',
	'admin_data',
	'admin_add_time',
	'admin_valid',

	];
	public static readonly COL_USER_ID: string = 'admin_user_id';
	public static readonly COL_LEVEL: string = 'admin_level';
	public static readonly COL_DATA: string = 'admin_data';
	public static readonly COL_ADD_TIME: string = 'admin_add_time';
	public static readonly COL_VALID: string = 'admin_valid';

	public singlePKValue() {
		return this.user_id;
	}
	public identifierColumns() {
		return [ OZAdminBase.COL_USER_ID ];
	}
	get user_id() { return _string(this._data[OZAdminBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(OZAdminBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get level() { return _int(this._data[OZAdminBase.COL_LEVEL]); }
	set level(nVal: any) { this._set(OZAdminBase.COL_LEVEL, _int(nVal)); }
	public getLevel() { return this.level; }
	public setLevel(nVal: any): this { this.level = nVal; return this; }
	get data() { return _string(this._data[OZAdminBase.COL_DATA]); }
	set data(nVal: any) { this._set(OZAdminBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[OZAdminBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(OZAdminBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get valid() { return _bool(this._data[OZAdminBase.COL_VALID]); }
	set valid(nVal: any) { this._set(OZAdminBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
