
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

export default abstract class OZFileBase extends GoblEntity {
	public static readonly PREFIX: string = 'file';
	public static readonly COLUMNS: string[] = [
	'file_id',
	'file_user_id',
	'file_key',
	'file_clone',
	'file_origin',
	'file_size',
	'file_type',
	'file_name',
	'file_label',
	'file_path',
	'file_thumb',
	'file_data',
	'file_add_time',
	'file_valid',

	];
	public static readonly COL_ID: string = 'file_id';
	public static readonly COL_USER_ID: string = 'file_user_id';
	public static readonly COL_KEY: string = 'file_key';
	public static readonly COL_CLONE: string = 'file_clone';
	public static readonly COL_ORIGIN: string = 'file_origin';
	public static readonly COL_SIZE: string = 'file_size';
	public static readonly COL_TYPE: string = 'file_type';
	public static readonly COL_NAME: string = 'file_name';
	public static readonly COL_LABEL: string = 'file_label';
	public static readonly COL_PATH: string = 'file_path';
	public static readonly COL_THUMB: string = 'file_thumb';
	public static readonly COL_DATA: string = 'file_data';
	public static readonly COL_ADD_TIME: string = 'file_add_time';
	public static readonly COL_VALID: string = 'file_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ OZFileBase.COL_ID ];
	}
	get id() { return _string(this._data[OZFileBase.COL_ID]); }
	set id(nVal: any) { this._set(OZFileBase.COL_ID, _string(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[OZFileBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(OZFileBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get key() { return _string(this._data[OZFileBase.COL_KEY]); }
	set key(nVal: any) { this._set(OZFileBase.COL_KEY, _string(nVal)); }
	public getKey() { return this.key; }
	public setKey(nVal: any): this { this.key = nVal; return this; }
	get clone() { return _string(this._data[OZFileBase.COL_CLONE]); }
	set clone(nVal: any) { this._set(OZFileBase.COL_CLONE, _string(nVal)); }
	public getClone() { return this.clone; }
	public setClone(nVal: any): this { this.clone = nVal; return this; }
	get origin() { return _string(this._data[OZFileBase.COL_ORIGIN]); }
	set origin(nVal: any) { this._set(OZFileBase.COL_ORIGIN, _string(nVal)); }
	public getOrigin() { return this.origin; }
	public setOrigin(nVal: any): this { this.origin = nVal; return this; }
	get size() { return _string(this._data[OZFileBase.COL_SIZE]); }
	set size(nVal: any) { this._set(OZFileBase.COL_SIZE, _string(nVal)); }
	public getSize() { return this.size; }
	public setSize(nVal: any): this { this.size = nVal; return this; }
	get type() { return _string(this._data[OZFileBase.COL_TYPE]); }
	set type(nVal: any) { this._set(OZFileBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get name() { return _string(this._data[OZFileBase.COL_NAME]); }
	set name(nVal: any) { this._set(OZFileBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get label() { return _string(this._data[OZFileBase.COL_LABEL]); }
	set label(nVal: any) { this._set(OZFileBase.COL_LABEL, _string(nVal)); }
	public getLabel() { return this.label; }
	public setLabel(nVal: any): this { this.label = nVal; return this; }
	get path() { return _string(this._data[OZFileBase.COL_PATH]); }
	set path(nVal: any) { this._set(OZFileBase.COL_PATH, _string(nVal)); }
	public getPath() { return this.path; }
	public setPath(nVal: any): this { this.path = nVal; return this; }
	get thumb() { return _string(this._data[OZFileBase.COL_THUMB]); }
	set thumb(nVal: any) { this._set(OZFileBase.COL_THUMB, _string(nVal)); }
	public getThumb() { return this.thumb; }
	public setThumb(nVal: any): this { this.thumb = nVal; return this; }
	get data() { return _string(this._data[OZFileBase.COL_DATA]); }
	set data(nVal: any) { this._set(OZFileBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[OZFileBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(OZFileBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get valid() { return _bool(this._data[OZFileBase.COL_VALID]); }
	set valid(nVal: any) { this._set(OZFileBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
