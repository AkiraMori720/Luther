
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

export default abstract class DYDeliveryBase extends GoblEntity {
	public static readonly PREFIX: string = 'delivery';
	public static readonly COLUMNS: string[] = [
	'delivery_id',
	'delivery_user_id',
	'delivery_order_id',
	'delivery_state',
	'delivery_stars',
	'delivery_data',
	'delivery_add_time',
	'delivery_update_time',
	'delivery_valid',

	];
	public static readonly COL_ID: string = 'delivery_id';
	public static readonly COL_USER_ID: string = 'delivery_user_id';
	public static readonly COL_ORDER_ID: string = 'delivery_order_id';
	public static readonly COL_STATE: string = 'delivery_state';
	public static readonly COL_STARS: string = 'delivery_stars';
	public static readonly COL_DATA: string = 'delivery_data';
	public static readonly COL_ADD_TIME: string = 'delivery_add_time';
	public static readonly COL_UPDATE_TIME: string = 'delivery_update_time';
	public static readonly COL_VALID: string = 'delivery_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYDeliveryBase.COL_ID ];
	}
	get id() { return _int(this._data[DYDeliveryBase.COL_ID]); }
	set id(nVal: any) { this._set(DYDeliveryBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYDeliveryBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYDeliveryBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get order_id() { return _int(this._data[DYDeliveryBase.COL_ORDER_ID]); }
	set order_id(nVal: any) { this._set(DYDeliveryBase.COL_ORDER_ID, _int(nVal)); }
	public getOrderId() { return this.order_id; }
	public setOrderId(nVal: any): this { this.order_id = nVal; return this; }
	get state() { return _string(this._data[DYDeliveryBase.COL_STATE]); }
	set state(nVal: any) { this._set(DYDeliveryBase.COL_STATE, _string(nVal)); }
	public getState() { return this.state; }
	public setState(nVal: any): this { this.state = nVal; return this; }
	get stars() { return _int(this._data[DYDeliveryBase.COL_STARS]); }
	set stars(nVal: any) { this._set(DYDeliveryBase.COL_STARS, _int(nVal)); }
	public getStars() { return this.stars; }
	public setStars(nVal: any): this { this.stars = nVal; return this; }
	get data() { return _string(this._data[DYDeliveryBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYDeliveryBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYDeliveryBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYDeliveryBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYDeliveryBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYDeliveryBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYDeliveryBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYDeliveryBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
