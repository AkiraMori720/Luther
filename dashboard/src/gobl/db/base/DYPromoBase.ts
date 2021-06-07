
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

export default abstract class DYPromoBase extends GoblEntity {
	public static readonly PREFIX: string = 'promo';
	public static readonly COLUMNS: string[] = [
	'promo_id',
	'promo_ref',
	'promo_company_id',
	'promo_title',
	'promo_short_description',
	'promo_description',
	'promo_type',
	'promo_code',
	'promo_auto_apply',
	'promo_total_applied',
	'promo_max_apply',
	'promo_max_user_apply',
	'promo_before_vat',
	'promo_amount',
	'promo_percent',
	'promo_currency_code',
	'promo_start_time',
	'promo_end_time',
	'promo_state',
	'promo_data',
	'promo_add_time',
	'promo_update_time',
	'promo_valid',

	];
	public static readonly COL_ID: string = 'promo_id';
	public static readonly COL_REF: string = 'promo_ref';
	public static readonly COL_COMPANY_ID: string = 'promo_company_id';
	public static readonly COL_TITLE: string = 'promo_title';
	public static readonly COL_SHORT_DESCRIPTION: string = 'promo_short_description';
	public static readonly COL_DESCRIPTION: string = 'promo_description';
	public static readonly COL_TYPE: string = 'promo_type';
	public static readonly COL_CODE: string = 'promo_code';
	public static readonly COL_AUTO_APPLY: string = 'promo_auto_apply';
	public static readonly COL_TOTAL_APPLIED: string = 'promo_total_applied';
	public static readonly COL_MAX_APPLY: string = 'promo_max_apply';
	public static readonly COL_MAX_USER_APPLY: string = 'promo_max_user_apply';
	public static readonly COL_BEFORE_VAT: string = 'promo_before_vat';
	public static readonly COL_AMOUNT: string = 'promo_amount';
	public static readonly COL_PERCENT: string = 'promo_percent';
	public static readonly COL_CURRENCY_CODE: string = 'promo_currency_code';
	public static readonly COL_START_TIME: string = 'promo_start_time';
	public static readonly COL_END_TIME: string = 'promo_end_time';
	public static readonly COL_STATE: string = 'promo_state';
	public static readonly COL_DATA: string = 'promo_data';
	public static readonly COL_ADD_TIME: string = 'promo_add_time';
	public static readonly COL_UPDATE_TIME: string = 'promo_update_time';
	public static readonly COL_VALID: string = 'promo_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYPromoBase.COL_ID ];
	}
	get id() { return _int(this._data[DYPromoBase.COL_ID]); }
	set id(nVal: any) { this._set(DYPromoBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get ref() { return _string(this._data[DYPromoBase.COL_REF]); }
	set ref(nVal: any) { this._set(DYPromoBase.COL_REF, _string(nVal)); }
	public getRef() { return this.ref; }
	public setRef(nVal: any): this { this.ref = nVal; return this; }
	get company_id() { return _int(this._data[DYPromoBase.COL_COMPANY_ID]); }
	set company_id(nVal: any) { this._set(DYPromoBase.COL_COMPANY_ID, _int(nVal)); }
	public getCompanyId() { return this.company_id; }
	public setCompanyId(nVal: any): this { this.company_id = nVal; return this; }
	get title() { return _string(this._data[DYPromoBase.COL_TITLE]); }
	set title(nVal: any) { this._set(DYPromoBase.COL_TITLE, _string(nVal)); }
	public getTitle() { return this.title; }
	public setTitle(nVal: any): this { this.title = nVal; return this; }
	get short_description() { return _string(this._data[DYPromoBase.COL_SHORT_DESCRIPTION]); }
	set short_description(nVal: any) { this._set(DYPromoBase.COL_SHORT_DESCRIPTION, _string(nVal)); }
	public getShortDescription() { return this.short_description; }
	public setShortDescription(nVal: any): this { this.short_description = nVal; return this; }
	get description() { return _string(this._data[DYPromoBase.COL_DESCRIPTION]); }
	set description(nVal: any) { this._set(DYPromoBase.COL_DESCRIPTION, _string(nVal)); }
	public getDescription() { return this.description; }
	public setDescription(nVal: any): this { this.description = nVal; return this; }
	get type() { return _string(this._data[DYPromoBase.COL_TYPE]); }
	set type(nVal: any) { this._set(DYPromoBase.COL_TYPE, _string(nVal)); }
	public getType() { return this.type; }
	public setType(nVal: any): this { this.type = nVal; return this; }
	get code() { return _string(this._data[DYPromoBase.COL_CODE]); }
	set code(nVal: any) { this._set(DYPromoBase.COL_CODE, _string(nVal)); }
	public getCode() { return this.code; }
	public setCode(nVal: any): this { this.code = nVal; return this; }
	get auto_apply() { return _bool(this._data[DYPromoBase.COL_AUTO_APPLY]); }
	set auto_apply(nVal: any) { this._set(DYPromoBase.COL_AUTO_APPLY, _bool(nVal)); }
	public getAutoApply() { return this.auto_apply; }
	public setAutoApply(nVal: any): this { this.auto_apply = nVal; return this; }
	get total_applied() { return _int(this._data[DYPromoBase.COL_TOTAL_APPLIED]); }
	set total_applied(nVal: any) { this._set(DYPromoBase.COL_TOTAL_APPLIED, _int(nVal)); }
	public getTotalApplied() { return this.total_applied; }
	public setTotalApplied(nVal: any): this { this.total_applied = nVal; return this; }
	get max_apply() { return _int(this._data[DYPromoBase.COL_MAX_APPLY]); }
	set max_apply(nVal: any) { this._set(DYPromoBase.COL_MAX_APPLY, _int(nVal)); }
	public getMaxApply() { return this.max_apply; }
	public setMaxApply(nVal: any): this { this.max_apply = nVal; return this; }
	get max_user_apply() { return _int(this._data[DYPromoBase.COL_MAX_USER_APPLY]); }
	set max_user_apply(nVal: any) { this._set(DYPromoBase.COL_MAX_USER_APPLY, _int(nVal)); }
	public getMaxUserApply() { return this.max_user_apply; }
	public setMaxUserApply(nVal: any): this { this.max_user_apply = nVal; return this; }
	get before_vat() { return _bool(this._data[DYPromoBase.COL_BEFORE_VAT]); }
	set before_vat(nVal: any) { this._set(DYPromoBase.COL_BEFORE_VAT, _bool(nVal)); }
	public getBeforeVat() { return this.before_vat; }
	public setBeforeVat(nVal: any): this { this.before_vat = nVal; return this; }
	get amount() { return _string(this._data[DYPromoBase.COL_AMOUNT]); }
	set amount(nVal: any) { this._set(DYPromoBase.COL_AMOUNT, _string(nVal)); }
	public getAmount() { return this.amount; }
	public setAmount(nVal: any): this { this.amount = nVal; return this; }
	get percent() { return _string(this._data[DYPromoBase.COL_PERCENT]); }
	set percent(nVal: any) { this._set(DYPromoBase.COL_PERCENT, _string(nVal)); }
	public getPercent() { return this.percent; }
	public setPercent(nVal: any): this { this.percent = nVal; return this; }
	get currency_code() { return _string(this._data[DYPromoBase.COL_CURRENCY_CODE]); }
	set currency_code(nVal: any) { this._set(DYPromoBase.COL_CURRENCY_CODE, _string(nVal)); }
	public getCurrencyCode() { return this.currency_code; }
	public setCurrencyCode(nVal: any): this { this.currency_code = nVal; return this; }
	get start_time() { return _string(this._data[DYPromoBase.COL_START_TIME]); }
	set start_time(nVal: any) { this._set(DYPromoBase.COL_START_TIME, _string(nVal)); }
	public getStartTime() { return this.start_time; }
	public setStartTime(nVal: any): this { this.start_time = nVal; return this; }
	get end_time() { return _string(this._data[DYPromoBase.COL_END_TIME]); }
	set end_time(nVal: any) { this._set(DYPromoBase.COL_END_TIME, _string(nVal)); }
	public getEndTime() { return this.end_time; }
	public setEndTime(nVal: any): this { this.end_time = nVal; return this; }
	get state() { return _string(this._data[DYPromoBase.COL_STATE]); }
	set state(nVal: any) { this._set(DYPromoBase.COL_STATE, _string(nVal)); }
	public getState() { return this.state; }
	public setState(nVal: any): this { this.state = nVal; return this; }
	get data() { return _string(this._data[DYPromoBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYPromoBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYPromoBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYPromoBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYPromoBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYPromoBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYPromoBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYPromoBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
