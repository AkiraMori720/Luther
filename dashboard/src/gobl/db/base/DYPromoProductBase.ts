
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

export default abstract class DYPromoProductBase extends GoblEntity {
	public static readonly PREFIX: string = 'pp';
	public static readonly COLUMNS: string[] = [
	'pp_promo_id',
	'pp_product_id',
	'pp_data',
	'pp_add_time',
	'pp_update_time',
	'pp_valid',

	];
	public static readonly COL_PROMO_ID: string = 'pp_promo_id';
	public static readonly COL_PRODUCT_ID: string = 'pp_product_id';
	public static readonly COL_DATA: string = 'pp_data';
	public static readonly COL_ADD_TIME: string = 'pp_add_time';
	public static readonly COL_UPDATE_TIME: string = 'pp_update_time';
	public static readonly COL_VALID: string = 'pp_valid';

	public identifierColumns() {
		return [ DYPromoProductBase.COL_PROMO_ID, DYPromoProductBase.COL_PRODUCT_ID, ];
	}
	get promo_id() { return _int(this._data[DYPromoProductBase.COL_PROMO_ID]); }
	set promo_id(nVal: any) { this._set(DYPromoProductBase.COL_PROMO_ID, _int(nVal)); }
	public getPromoId() { return this.promo_id; }
	public setPromoId(nVal: any): this { this.promo_id = nVal; return this; }
	get product_id() { return _string(this._data[DYPromoProductBase.COL_PRODUCT_ID]); }
	set product_id(nVal: any) { this._set(DYPromoProductBase.COL_PRODUCT_ID, _string(nVal)); }
	public getProductId() { return this.product_id; }
	public setProductId(nVal: any): this { this.product_id = nVal; return this; }
	get data() { return _string(this._data[DYPromoProductBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYPromoProductBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYPromoProductBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYPromoProductBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYPromoProductBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYPromoProductBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYPromoProductBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYPromoProductBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
