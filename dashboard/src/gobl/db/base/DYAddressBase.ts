
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

export default abstract class DYAddressBase extends GoblEntity {
	public static readonly PREFIX: string = 'address';
	public static readonly COLUMNS: string[] = [
	'address_id',
	'address_target',
	'address_target_id',
	'address_is_main',
	'address_longitude',
	'address_latitude',
	'address_address',
	'address_data',
	'address_add_time',
	'address_update_time',
	'address_valid',

	];
	public static readonly COL_ID: string = 'address_id';
	public static readonly COL_TARGET: string = 'address_target';
	public static readonly COL_TARGET_ID: string = 'address_target_id';
	public static readonly COL_IS_MAIN: string = 'address_is_main';
	public static readonly COL_LONGITUDE: string = 'address_longitude';
	public static readonly COL_LATITUDE: string = 'address_latitude';
	public static readonly COL_ADDRESS: string = 'address_address';
	public static readonly COL_DATA: string = 'address_data';
	public static readonly COL_ADD_TIME: string = 'address_add_time';
	public static readonly COL_UPDATE_TIME: string = 'address_update_time';
	public static readonly COL_VALID: string = 'address_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYAddressBase.COL_ID ];
	}
	get id() { return _int(this._data[DYAddressBase.COL_ID]); }
	set id(nVal: any) { this._set(DYAddressBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get target() { return _string(this._data[DYAddressBase.COL_TARGET]); }
	set target(nVal: any) { this._set(DYAddressBase.COL_TARGET, _string(nVal)); }
	public getTarget() { return this.target; }
	public setTarget(nVal: any): this { this.target = nVal; return this; }
	get target_id() { return _int(this._data[DYAddressBase.COL_TARGET_ID]); }
	set target_id(nVal: any) { this._set(DYAddressBase.COL_TARGET_ID, _int(nVal)); }
	public getTargetId() { return this.target_id; }
	public setTargetId(nVal: any): this { this.target_id = nVal; return this; }
	get is_main() { return _bool(this._data[DYAddressBase.COL_IS_MAIN]); }
	set is_main(nVal: any) { this._set(DYAddressBase.COL_IS_MAIN, _bool(nVal)); }
	public getISMain() { return this.is_main; }
	public setISMain(nVal: any): this { this.is_main = nVal; return this; }
	get longitude() { return _string(this._data[DYAddressBase.COL_LONGITUDE]); }
	set longitude(nVal: any) { this._set(DYAddressBase.COL_LONGITUDE, _string(nVal)); }
	public getLongitude() { return this.longitude; }
	public setLongitude(nVal: any): this { this.longitude = nVal; return this; }
	get latitude() { return _string(this._data[DYAddressBase.COL_LATITUDE]); }
	set latitude(nVal: any) { this._set(DYAddressBase.COL_LATITUDE, _string(nVal)); }
	public getLatitude() { return this.latitude; }
	public setLatitude(nVal: any): this { this.latitude = nVal; return this; }
	get address() { return _string(this._data[DYAddressBase.COL_ADDRESS]); }
	set address(nVal: any) { this._set(DYAddressBase.COL_ADDRESS, _string(nVal)); }
	public getAddress() { return this.address; }
	public setAddress(nVal: any): this { this.address = nVal; return this; }
	get data() { return _string(this._data[DYAddressBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYAddressBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYAddressBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYAddressBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYAddressBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYAddressBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYAddressBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYAddressBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
