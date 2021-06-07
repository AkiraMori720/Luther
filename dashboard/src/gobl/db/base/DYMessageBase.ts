
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

export default abstract class DYMessageBase extends GoblEntity {
	public static readonly PREFIX: string = 'message';
	public static readonly COLUMNS: string[] = [
	'message_id',
	'message_sender_id',
	'message_chat_id',
	'message_ref_id',
	'message_type',
	'message_content',
	'message_read',
	'message_data',
	'message_add_time',
	'message_update_time',
	'message_valid',

	];
	public static readonly COL_ID: string = 'message_id';
	public static readonly COL_SENDER_ID: string = 'message_sender_id';
	public static readonly COL_CHAT_ID: string = 'message_chat_id';
	public static readonly COL_REF_ID: string = 'message_ref_id';
	public static readonly COL_TYPE: string = 'message_type';
	public static readonly COL_CONTENT: string = 'message_content';
	public static readonly COL_READ: string = 'message_read';
	public static readonly COL_DATA: string = 'message_data';
	public static readonly COL_ADD_TIME: string = 'message_add_time';
	public static readonly COL_UPDATE_TIME: string = 'message_update_time';
	public static readonly COL_VALID: string = 'message_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYMessageBase.COL_ID ];
	}
	get id() { return _int(this._data[DYMessageBase.COL_ID]); }
	set id(nVal: any) { this._set(DYMessageBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get sender_id() { return _string(this._data[DYMessageBase.COL_SENDER_ID]); }
	set sender_id(nVal: any) { this._set(DYMessageBase.COL_SENDER_ID, _string(nVal)); }
	public getSenderId() { return this.sender_id; }
	public setSenderId(nVal: any): this { this.sender_id = nVal; return this; }
	get chat_id() { return _int(this._data[DYMessageBase.COL_CHAT_ID]); }
	set chat_id(nVal: any) { this._set(DYMessageBase.COL_CHAT_ID, _int(nVal)); }
	public getChatId() { return this.chat_id; }
	public setChatId(nVal: any): this { this.chat_id = nVal; return this; }
	get ref_id() { return _int(this._data[DYMessageBase.COL_REF_ID]); }
	set ref_id(nVal: any) { this._set(DYMessageBase.COL_REF_ID, _int(nVal)); }
	public getRefId() { return this.ref_id; }
	public setRefId(nVal: any): this { this.ref_id = nVal; return this; }
	get type() { return _string(this._data[DYMessageBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYMessageBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get content() { return _string(this._data[DYMessageBase.COL_CONTENT]); }
	set content(nVal: any) { this._set(DYMessageBase.COL_CONTENT, _string(nVal)); }
	public getContent() { return this.content; }
	public setContent(nVal: any): this { this.content = nVal; return this; }
	get read() { return _bool(this._data[DYMessageBase.COL_READ]); }
	set read(nVal: any) { this._set(DYMessageBase.COL_READ, _bool(nVal)); }
	public getRead() { return this.read; }
	public setRead(nVal: any): this { this.read = nVal; return this; }
	get data() { return _string(this._data[DYMessageBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYMessageBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYMessageBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYMessageBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYMessageBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYMessageBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYMessageBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYMessageBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
