
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

export default abstract class DYPubBase extends GoblEntity {
	public static readonly PREFIX: string = 'pub';
	public static readonly COLUMNS: string[] = [
	'pub_id',
	'pub_ref',
	'pub_title',
	'pub_link',
	'pub_image',
	'pub_data',
	'pub_add_time',
	'pub_update_time',
	'pub_valid',

	];
	public static readonly COL_ID: string = 'pub_id';
	public static readonly COL_REF: string = 'pub_ref';
	public static readonly COL_TITLE: string = 'pub_title';
	public static readonly COL_LINK: string = 'pub_link';
	public static readonly COL_IMAGE: string = 'pub_image';
	public static readonly COL_DATA: string = 'pub_data';
	public static readonly COL_ADD_TIME: string = 'pub_add_time';
	public static readonly COL_UPDATE_TIME: string = 'pub_update_time';
	public static readonly COL_VALID: string = 'pub_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYPubBase.COL_ID ];
	}
	get id() { return _int(this._data[DYPubBase.COL_ID]); }
	set id(nVal: any) { this._set(DYPubBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get ref() { return _string(this._data[DYPubBase.COL_REF]); }
	set ref(nVal: any) { this._set(DYPubBase.COL_REF, _string(nVal)); }
	public getRef() { return this.ref; }
	public setRef(nVal: any): this { this.ref = nVal; return this; }
	get title() { return _string(this._data[DYPubBase.COL_TITLE]); }
	set title(nVal: any) { this._set(DYPubBase.COL_TITLE, _string(nVal)); }
	public getTitle() { return this.title; }
	public setTitle(nVal: any): this { this.title = nVal; return this; }
	get link() { return _string(this._data[DYPubBase.COL_LINK]); }
	set link(nVal: any) { this._set(DYPubBase.COL_LINK, _string(nVal)); }
	public getLink() { return this.link; }
	public setLink(nVal: any): this { this.link = nVal; return this; }
	get image() { return _string(this._data[DYPubBase.COL_IMAGE]); }
	set image(nVal: any) { this._set(DYPubBase.COL_IMAGE, _string(nVal)); }
	public getImage() { return this.image; }
	public setImage(nVal: any): this { this.image = nVal; return this; }
	get data() { return _string(this._data[DYPubBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYPubBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYPubBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYPubBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYPubBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYPubBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYPubBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYPubBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
