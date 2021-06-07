
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

export default abstract class DYOrderBase extends GoblEntity {
	public static readonly PREFIX: string = 'order';
	public static readonly COLUMNS: string[] = [
	'order_id',
	'order_user_id',
	'order_state',
	'order_data',
	'order_add_time',
	'order_update_time',
	'order_valid',

	];
	public static readonly COL_ID: string = 'order_id';
	public static readonly COL_USER_ID: string = 'order_user_id';
	public static readonly COL_STATE: string = 'order_state';
	public static readonly COL_DATA: string = 'order_data';
	public static readonly COL_ADD_TIME: string = 'order_add_time';
	public static readonly COL_UPDATE_TIME: string = 'order_update_time';
	public static readonly COL_VALID: string = 'order_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYOrderBase.COL_ID ];
	}
	get id() { return _int(this._data[DYOrderBase.COL_ID]); }
	set id(nVal: any) { this._set(DYOrderBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYOrderBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYOrderBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get state() { return _string(this._data[DYOrderBase.COL_STATE]); }
	set state(nVal: any) { this._set(DYOrderBase.COL_STATE, _string(nVal)); }
	public getState() { return this.state; }
	public setState(nVal: any): this { this.state = nVal; return this; }
	get data() { return _string(this._data[DYOrderBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYOrderBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYOrderBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYOrderBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYOrderBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYOrderBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYOrderBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYOrderBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
