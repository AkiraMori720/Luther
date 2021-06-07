
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

export default abstract class DYDelivererBase extends GoblEntity {
	public static readonly PREFIX: string = 'deliverer';
	public static readonly COLUMNS: string[] = [
	'deliverer_id',
	'deliverer_user_id',
	'deliverer_company_id',
	'deliverer_available',
	'deliverer_data',
	'deliverer_add_time',
	'deliverer_update_time',
	'deliverer_valid',

	];
	public static readonly COL_ID: string = 'deliverer_id';
	public static readonly COL_USER_ID: string = 'deliverer_user_id';
	public static readonly COL_COMPANY_ID: string = 'deliverer_company_id';
	public static readonly COL_AVAILABLE: string = 'deliverer_available';
	public static readonly COL_DATA: string = 'deliverer_data';
	public static readonly COL_ADD_TIME: string = 'deliverer_add_time';
	public static readonly COL_UPDATE_TIME: string = 'deliverer_update_time';
	public static readonly COL_VALID: string = 'deliverer_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYDelivererBase.COL_ID ];
	}
	get id() { return _int(this._data[DYDelivererBase.COL_ID]); }
	set id(nVal: any) { this._set(DYDelivererBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYDelivererBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYDelivererBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get company_id() { return _int(this._data[DYDelivererBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYDelivererBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get available() { return _bool(this._data[DYDelivererBase.COL_AVAILABLE]); }
	set available(nVal: any) { this._set(DYDelivererBase.COL_AVAILABLE, _bool(nVal)); }
	public getAvailable() { return this.available; }
	public setAvailable(nVal: any): this { this.available = nVal; return this; }
	get data() { return _string(this._data[DYDelivererBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYDelivererBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYDelivererBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYDelivererBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYDelivererBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYDelivererBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYDelivererBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYDelivererBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
