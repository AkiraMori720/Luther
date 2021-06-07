
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

export default abstract class DYCategoryBase extends GoblEntity {
	public static readonly PREFIX: string = 'category';
	public static readonly COLUMNS: string[] = [
	'category_id',
	'category_type',
	'category_name',
	'category_slug',
	'category_short_description',
	'category_description',
	'category_image',
	'category_data',
	'category_add_time',
	'category_update_time',
	'category_valid',

	];
	public static readonly COL_ID: string = 'category_id';
	public static readonly COL_TYPE: string = 'category_type';
	public static readonly COL_NAME: string = 'category_name';
	public static readonly COL_SLUG: string = 'category_slug';
	public static readonly COL_SHORT_DESCRIPTION: string = 'category_short_description';
	public static readonly COL_DESCRIPTION: string = 'category_description';
	public static readonly COL_IMAGE: string = 'category_image';
	public static readonly COL_DATA: string = 'category_data';
	public static readonly COL_ADD_TIME: string = 'category_add_time';
	public static readonly COL_UPDATE_TIME: string = 'category_update_time';
	public static readonly COL_VALID: string = 'category_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYCategoryBase.COL_ID ];
	}
	get id() { return _int(this._data[DYCategoryBase.COL_ID]); }
	set id(nVal: any) { this._set(DYCategoryBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get type() { return _string(this._data[DYCategoryBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYCategoryBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get name() { return _string(this._data[DYCategoryBase.COL_NAME]); }
	set name(nVal: any) { this._set(DYCategoryBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get slug() { return _string(this._data[DYCategoryBase.COL_SLUG]); }
	set slug(nVal: any) { this._set(DYCategoryBase.COL_SLUG, _string(nVal)); }
	public getSlug() { return this.slug; }
	public setSlug(nVal: any): this { this.slug = nVal; return this; }
	get short_description() { return _string(this._data[DYCategoryBase.COL_SHORT_DESCRIPTION]); }
	set short_description(nVal: any) { this._set(DYCategoryBase.COL_SHORT_DESCRIPTION, _string(nVal)); }
	public getShortDescription() { return this.short_description; }
	public setShortDescription(nVal: any): this { this.short_description = nVal; return this; }
	get description() { return _string(this._data[DYCategoryBase.COL_DESCRIPTION]); }
	set description(nVal: any) { this._set(DYCategoryBase.COL_DESCRIPTION, _string(nVal)); }
	public getDescription() { return this.description; }
	public setDescription(nVal: any): this { this.description = nVal; return this; }
	get image() { return _string(this._data[DYCategoryBase.COL_IMAGE]); }
	set image(nVal: any) { this._set(DYCategoryBase.COL_IMAGE, _string(nVal)); }
	public getImage() { return this.image; }
	public setImage(nVal: any): this { this.image = nVal; return this; }
	get data() { return _string(this._data[DYCategoryBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYCategoryBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYCategoryBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYCategoryBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYCategoryBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYCategoryBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYCategoryBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYCategoryBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
