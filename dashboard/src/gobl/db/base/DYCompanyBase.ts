
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

export default abstract class DYCompanyBase extends GoblEntity {
	public static readonly PREFIX: string = 'company';
	public static readonly COLUMNS: string[] = [
	'company_id',
	'company_owner_id',
	'company_type',
	'company_name',
	'company_short_description',
	'company_description',
	'company_image',
	'company_data',
	'company_add_time',
	'company_update_time',
	'company_valid',

	];
	public static readonly COL_ID: string = 'company_id';
	public static readonly COL_OWNER_ID: string = 'company_owner_id';
	public static readonly COL_TYPE: string = 'company_type';
	public static readonly COL_NAME: string = 'company_name';
	public static readonly COL_SHORT_DESCRIPTION: string = 'company_short_description';
	public static readonly COL_DESCRIPTION: string = 'company_description';
	public static readonly COL_IMAGE: string = 'company_image';
	public static readonly COL_DATA: string = 'company_data';
	public static readonly COL_ADD_TIME: string = 'company_add_time';
	public static readonly COL_UPDATE_TIME: string = 'company_update_time';
	public static readonly COL_VALID: string = 'company_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYCompanyBase.COL_ID ];
	}
	get id() { return _int(this._data[DYCompanyBase.COL_ID]); }
	set id(nVal: any) { this._set(DYCompanyBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get owner_id() { return _string(this._data[DYCompanyBase.COL_OWNER_ID]); }
	set owner_id(nVal: any) { this._set(DYCompanyBase.COL_OWNER_ID, _string(nVal)); }
	public getOwnerId() { return this.owner_id; }
	public setOwnerId(nVal: any): this { this.owner_id = nVal; return this; }
	get type() { return _string(this._data[DYCompanyBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYCompanyBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get name() { return _string(this._data[DYCompanyBase.COL_NAME]); }
	set name(nVal: any) { this._set(DYCompanyBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get short_description() { return _string(this._data[DYCompanyBase.COL_SHORT_DESCRIPTION]); }
	set short_description(nVal: any) { this._set(DYCompanyBase.COL_SHORT_DESCRIPTION, _string(nVal)); }
	public getShortDescription() { return this.short_description; }
	public setShortDescription(nVal: any): this { this.short_description = nVal; return this; }
	get description() { return _string(this._data[DYCompanyBase.COL_DESCRIPTION]); }
	set description(nVal: any) { this._set(DYCompanyBase.COL_DESCRIPTION, _string(nVal)); }
	public getDescription() { return this.description; }
	public setDescription(nVal: any): this { this.description = nVal; return this; }
	get image() { return _string(this._data[DYCompanyBase.COL_IMAGE]); }
	set image(nVal: any) { this._set(DYCompanyBase.COL_IMAGE, _string(nVal)); }
	public getImage() { return this.image; }
	public setImage(nVal: any): this { this.image = nVal; return this; }
	get data() { return _string(this._data[DYCompanyBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYCompanyBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYCompanyBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYCompanyBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYCompanyBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYCompanyBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYCompanyBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYCompanyBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
