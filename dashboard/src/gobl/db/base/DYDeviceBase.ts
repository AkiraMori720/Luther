
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

export default abstract class DYDeviceBase extends GoblEntity {
	public static readonly PREFIX: string = 'dv';
	public static readonly COLUMNS: string[] = [
	'dv_id',
	'dv_user_id',
	'dv_os',
	'dv_app',
	'dv_key',
	'dv_data',
	'dv_add_time',
	'dv_update_time',
	'dv_valid',

	];
	public static readonly COL_ID: string = 'dv_id';
	public static readonly COL_USER_ID: string = 'dv_user_id';
	public static readonly COL_OS: string = 'dv_os';
	public static readonly COL_APP: string = 'dv_app';
	public static readonly COL_KEY: string = 'dv_key';
	public static readonly COL_DATA: string = 'dv_data';
	public static readonly COL_ADD_TIME: string = 'dv_add_time';
	public static readonly COL_UPDATE_TIME: string = 'dv_update_time';
	public static readonly COL_VALID: string = 'dv_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYDeviceBase.COL_ID ];
	}
	get id() { return _string(this._data[DYDeviceBase.COL_ID]); }
	set id(nVal: any) { this._set(DYDeviceBase.COL_ID, _string(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYDeviceBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYDeviceBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get os() { return _string(this._data[DYDeviceBase.COL_OS]); }
	set os(nVal: any) { this._set(DYDeviceBase.COL_OS, _string(nVal)); }
	public getOs() { return this.os; }
	public setOs(nVal: any): this { this.os = nVal; return this; }
	get app() { return _string(this._data[DYDeviceBase.COL_APP]); }
	set app(nVal: any) { this._set(DYDeviceBase.COL_APP, _string(nVal)); }
	public getApp() { return this.app; }
	public setApp(nVal: any): this { this.app = nVal; return this; }
	get key() { return _string(this._data[DYDeviceBase.COL_KEY]); }
	set key(nVal: any) { this._set(DYDeviceBase.COL_KEY, _string(nVal)); }
	public getKey() { return this.key; }
	public setKey(nVal: any): this { this.key = nVal; return this; }
	get data() { return _string(this._data[DYDeviceBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYDeviceBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYDeviceBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYDeviceBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYDeviceBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYDeviceBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYDeviceBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYDeviceBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
