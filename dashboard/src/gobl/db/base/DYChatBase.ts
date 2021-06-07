
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

export default abstract class DYChatBase extends GoblEntity {
	public static readonly PREFIX: string = 'chat';
	public static readonly COLUMNS: string[] = [
	'chat_id',
	'chat_created_by',
	'chat_company_id',
	'chat_target_id',
	'chat_data',
	'chat_add_time',
	'chat_update_time',
	'chat_valid',

	];
	public static readonly COL_ID: string = 'chat_id';
	public static readonly COL_CREATED_BY: string = 'chat_created_by';
	public static readonly COL_COMPANY_ID: string = 'chat_company_id';
	public static readonly COL_TARGET_ID: string = 'chat_target_id';
	public static readonly COL_DATA: string = 'chat_data';
	public static readonly COL_ADD_TIME: string = 'chat_add_time';
	public static readonly COL_UPDATE_TIME: string = 'chat_update_time';
	public static readonly COL_VALID: string = 'chat_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYChatBase.COL_ID ];
	}
	get id() { return _int(this._data[DYChatBase.COL_ID]); }
	set id(nVal: any) { this._set(DYChatBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get created_by() { return _string(this._data[DYChatBase.COL_CREATED_BY]); }
	set created_by(nVal: any) { this._set(DYChatBase.COL_CREATED_BY, _string(nVal)); }
	public getCreatedBy() { return this.created_by; }
	public setCreatedBy(nVal: any): this { this.created_by = nVal; return this; }
	get company_id() { return _int(this._data[DYChatBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYChatBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get target_id() { return _string(this._data[DYChatBase.COL_TARGET_ID]); }
	set target_id(nVal: any) { this._set(DYChatBase.COL_TARGET_ID, _string(nVal)); }
	public getTargetId() { return this.target_id; }
	public setTargetId(nVal: any): this { this.target_id = nVal; return this; }
	get data() { return _string(this._data[DYChatBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYChatBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYChatBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYChatBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYChatBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYChatBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYChatBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYChatBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
