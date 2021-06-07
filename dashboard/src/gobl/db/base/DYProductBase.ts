
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

export default abstract class DYProductBase extends GoblEntity {
	public static readonly PREFIX: string = 'product';
	public static readonly COLUMNS: string[] = [
	'product_id',
	'product_company_id',
	'product_category_id',
	'product_ref',
	'product_name',
	'product_slug',
	'product_short_description',
	'product_description',
	'product_images',
	'product_price',
	'product_currency_code',
	'product_vat_id',
	'product_data',
	'product_add_time',
	'product_update_time',
	'product_valid',

	];
	public static readonly COL_ID: string = 'product_id';
	public static readonly COL_COMPANY_ID: string = 'product_company_id';
	public static readonly COL_CATEGORY_ID: string = 'product_category_id';
	public static readonly COL_REF: string = 'product_ref';
	public static readonly COL_NAME: string = 'product_name';
	public static readonly COL_SLUG: string = 'product_slug';
	public static readonly COL_SHORT_DESCRIPTION: string = 'product_short_description';
	public static readonly COL_DESCRIPTION: string = 'product_description';
	public static readonly COL_IMAGES: string = 'product_images';
	public static readonly COL_PRICE: string = 'product_price';
	public static readonly COL_CURRENCY_CODE: string = 'product_currency_code';
	public static readonly COL_VAT_ID: string = 'product_vat_id';
	public static readonly COL_DATA: string = 'product_data';
	public static readonly COL_ADD_TIME: string = 'product_add_time';
	public static readonly COL_UPDATE_TIME: string = 'product_update_time';
	public static readonly COL_VALID: string = 'product_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYProductBase.COL_ID ];
	}
	get id() { return _string(this._data[DYProductBase.COL_ID]); }
	set id(nVal: any) { this._set(DYProductBase.COL_ID, _string(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get company_id() { return _int(this._data[DYProductBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYProductBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get category_id() { return _int(this._data[DYProductBase.COL_CATEGORY_ID]); }
	set category_id(nVal: any) { this._set(DYProductBase.COL_CATEGORY_ID, _int(nVal)); }
	public getCategoryId() { return this.category_id; }
	public setCategoryId(nVal: any): this { this.category_id = nVal; return this; }
	get ref() { return _string(this._data[DYProductBase.COL_REF]); }
	set ref(nVal: any) { this._set(DYProductBase.COL_REF, _string(nVal)); }
	public getRef() { return this.ref; }
	public setRef(nVal: any): this { this.ref = nVal; return this; }
	get name() { return _string(this._data[DYProductBase.COL_NAME]); }
	set name(nVal: any) { this._set(DYProductBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get slug() { return _string(this._data[DYProductBase.COL_SLUG]); }
	set slug(nVal: any) { this._set(DYProductBase.COL_SLUG, _string(nVal)); }
	public getSlug() { return this.slug; }
	public setSlug(nVal: any): this { this.slug = nVal; return this; }
	get short_description() { return _string(this._data[DYProductBase.COL_SHORT_DESCRIPTION]); }
	set short_description(nVal: any) { this._set(DYProductBase.COL_SHORT_DESCRIPTION, _string(nVal)); }
	public getShortDescription() { return this.short_description; }
	public setShortDescription(nVal: any): this { this.short_description = nVal; return this; }
	get description() { return _string(this._data[DYProductBase.COL_DESCRIPTION]); }
	set description(nVal: any) { this._set(DYProductBase.COL_DESCRIPTION, _string(nVal)); }
	public getDescription() { return this.description; }
	public setDescription(nVal: any): this { this.description = nVal; return this; }
	get images() { return _string(this._data[DYProductBase.COL_IMAGES]); }
	set images(nVal: any) { this._set(DYProductBase.COL_IMAGES, _string(nVal)); }
	public getImages() { return this.images; }
	public setImages(nVal: any): this { this.images = nVal; return this; }
	get price() { return _string(this._data[DYProductBase.COL_PRICE]); }
	set price(nVal: any) { this._set(DYProductBase.COL_PRICE, _string(nVal)); }
	public getPrice() { return this.price; }
	public setPrice(nVal: any): this { this.price = nVal; return this; }
	get currency_code() { return _string(this._data[DYProductBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYProductBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get vat_id() { return _int(this._data[DYProductBase.COL_VAT_ID]); }
	set vat_id(nVal: any) { this._set(DYProductBase.COL_VAT_ID, _int(nVal)); }
	public getVatId() { return this.vat_id; }
	public setVatId(nVal: any): this { this.vat_id = nVal; return this; }
	get data() { return _string(this._data[DYProductBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYProductBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYProductBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYProductBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYProductBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYProductBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYProductBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYProductBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
