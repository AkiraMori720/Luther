
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

export default abstract class DYEmployeeBase extends GoblEntity {
	public static readonly PREFIX: string = 'employee';
	public static readonly COLUMNS: string[] = [
	'employee_id',
	'employee_user_id',
	'employee_company_id',
	'employee_role',
	'employee_access',
	'employee_data',
	'employee_add_time',
	'employee_update_time',
	'employee_valid',

	];
	public static readonly COL_ID: string = 'employee_id';
	public static readonly COL_USER_ID: string = 'employee_user_id';
	public static readonly COL_COMPANY_ID: string = 'employee_company_id';
	public static readonly COL_ROLE: string = 'employee_role';
	public static readonly COL_ACCESS: string = 'employee_access';
	public static readonly COL_DATA: string = 'employee_data';
	public static readonly COL_ADD_TIME: string = 'employee_add_time';
	public static readonly COL_UPDATE_TIME: string = 'employee_update_time';
	public static readonly COL_VALID: string = 'employee_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYEmployeeBase.COL_ID ];
	}
	get id() { return _int(this._data[DYEmployeeBase.COL_ID]); }
	set id(nVal: any) { this._set(DYEmployeeBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get user_id() { return _string(this._data[DYEmployeeBase.COL_USER_ID]); }
	set user_id(nVal: any) { this._set(DYEmployeeBase.COL_USER_ID, _string(nVal)); }
	public getUserId() { return this.user_id; }
	public setUserId(nVal: any): this { this.user_id = nVal; return this; }
	get company_id() { return _int(this._data[DYEmployeeBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYEmployeeBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get role() { return _string(this._data[DYEmployeeBase.COL_ROLE]); }
	set role(nVal: any) { this._set(DYEmployeeBase.COL_ROLE, _string(nVal)); }
	public getRole() { return this.role; }
	public setRole(nVal: any): this { this.role = nVal; return this; }
	get access() { return _string(this._data[DYEmployeeBase.COL_ACCESS]); }
	set access(nVal: any) { this._set(DYEmployeeBase.COL_ACCESS, _string(nVal)); }
	public getAccess() { return this.access; }
	public setAccess(nVal: any): this { this.access = nVal; return this; }
	get data() { return _string(this._data[DYEmployeeBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYEmployeeBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYEmployeeBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYEmployeeBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYEmployeeBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYEmployeeBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYEmployeeBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYEmployeeBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
