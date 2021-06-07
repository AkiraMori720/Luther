
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

export default abstract class OZUserBase extends GoblEntity {
	public static readonly PREFIX: string = 'user';
	public static readonly COLUMNS: string[] = [
	'user_id',
	'user_phone',
	'user_email',
	'user_pass',
	'user_name',
	'user_gender',
	'user_birth_date',
	'user_picid',
	'user_cc2',
	'user_data',
	'user_add_time',
	'user_valid',

	];
	public static readonly COL_ID: string = 'user_id';
	public static readonly COL_PHONE: string = 'user_phone';
	public static readonly COL_EMAIL: string = 'user_email';
	public static readonly COL_PASS: string = 'user_pass';
	public static readonly COL_NAME: string = 'user_name';
	public static readonly COL_GENDER: string = 'user_gender';
	public static readonly COL_BIRTH_DATE: string = 'user_birth_date';
	public static readonly COL_PICID: string = 'user_picid';
	public static readonly COL_CC2: string = 'user_cc2';
	public static readonly COL_DATA: string = 'user_data';
	public static readonly COL_ADD_TIME: string = 'user_add_time';
	public static readonly COL_VALID: string = 'user_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ OZUserBase.COL_ID ];
	}
	get id() { return _string(this._data[OZUserBase.COL_ID]); }
	set id(nVal: any) { this._set(OZUserBase.COL_ID, _string(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get phone() { return _string(this._data[OZUserBase.COL_PHONE]); }
	set phone(nVal: any) { this._set(OZUserBase.COL_PHONE, _string(nVal)); }
	public getPhone() { return this.phone; }
	public setPhone(nVal: any): this { this.phone = nVal; return this; }
	get email() { return _string(this._data[OZUserBase.COL_EMAIL]); }
	set email(nVal: any) { this._set(OZUserBase.COL_EMAIL, _string(nVal)); }
	public getEmail() { return this.email; }
	public setEmail(nVal: any): this { this.email = nVal; return this; }
	get pass() { return _string(this._data[OZUserBase.COL_PASS]); }
	set pass(nVal: any) { this._set(OZUserBase.COL_PASS, _string(nVal)); }
	public getPass() { return this.pass; }
	public setPass(nVal: any): this { this.pass = nVal; return this; }
	get name() { return _string(this._data[OZUserBase.COL_NAME]); }
	set name(nVal: any) { this._set(OZUserBase.COL_NAME, _string(nVal)); }
	public getName() { return this.name; }
	public setName(nVal: any): this { this.name = nVal; return this; }
	get gender() { return _string(this._data[OZUserBase.COL_GENDER]); }
	set gender(nVal: any) { this._set(OZUserBase.COL_GENDER, _string(nVal)); }
	public getGender() { return this.gender; }
	public setGender(nVal: any): this { this.gender = nVal; return this; }
	get birth_date() { return _string(this._data[OZUserBase.COL_BIRTH_DATE]); }
	set birth_date(nVal: any) { this._set(OZUserBase.COL_BIRTH_DATE, _string(nVal)); }
	public getBirthDate() { return this.birth_date; }
	public setBirthDate(nVal: any): this { this.birth_date = nVal; return this; }
	get picid() { return _string(this._data[OZUserBase.COL_PICID]); }
	set picid(nVal: any) { this._set(OZUserBase.COL_PICID, _string(nVal)); }
	public getPicid() { return this.picid; }
	public setPicid(nVal: any): this { this.picid = nVal; return this; }
	get cc2() { return _string(this._data[OZUserBase.COL_CC2]); }
	set cc2(nVal: any) { this._set(OZUserBase.COL_CC2, _string(nVal)); }
	public getCc2() { return this.cc2; }
	public setCc2(nVal: any): this { this.cc2 = nVal; return this; }
	get data() { return _string(this._data[OZUserBase.COL_DATA]); }
	set data(nVal: any) { this._set(OZUserBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[OZUserBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(OZUserBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get valid() { return _bool(this._data[OZUserBase.COL_VALID]); }
	set valid(nVal: any) { this._set(OZUserBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
