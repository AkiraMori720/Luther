
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

export default abstract class DYExchangeBase extends GoblEntity {
	public static readonly PREFIX: string = 'exchange';
	public static readonly COLUMNS: string[] = [
	'exchange_id',
	'exchange_from',
	'exchange_to',
	'exchange_rate',
	'exchange_data',
	'exchange_add_time',
	'exchange_update_time',
	'exchange_valid',

	];
	public static readonly COL_ID: string = 'exchange_id';
	public static readonly COL_FROM: string = 'exchange_from';
	public static readonly COL_TO: string = 'exchange_to';
	public static readonly COL_RATE: string = 'exchange_rate';
	public static readonly COL_DATA: string = 'exchange_data';
	public static readonly COL_ADD_TIME: string = 'exchange_add_time';
	public static readonly COL_UPDATE_TIME: string = 'exchange_update_time';
	public static readonly COL_VALID: string = 'exchange_valid';

	public singlePKValue() {
		return this.id;
	}
	public identifierColumns() {
		return [ DYExchangeBase.COL_ID ];
	}
	get id() { return _int(this._data[DYExchangeBase.COL_ID]); }
	set id(nVal: any) { this._set(DYExchangeBase.COL_ID, _int(nVal)); }
	public getId() { return this.id; }
	public setId(nVal: any): this { this.id = nVal; return this; }
	get from() { return _string(this._data[DYExchangeBase.COL_FROM]); }
	set from(nVal: any) { this._set(DYExchangeBase.COL_FROM, _string(nVal)); }
	public getFrom() { return this.from; }
	public setFrom(nVal: any): this { this.from = nVal; return this; }
	get to() { return _string(this._data[DYExchangeBase.COL_TO]); }
	set to(nVal: any) { this._set(DYExchangeBase.COL_TO, _string(nVal)); }
	public getTo() { return this.to; }
	public setTo(nVal: any): this { this.to = nVal; return this; }
	get rate() { return _string(this._data[DYExchangeBase.COL_RATE]); }
	set rate(nVal: any) { this._set(DYExchangeBase.COL_RATE, _string(nVal)); }
	public getRate() { return this.rate; }
	public setRate(nVal: any): this { this.rate = nVal; return this; }
	get data() { return _string(this._data[DYExchangeBase.COL_DATA]); }
	set data(nVal: any) { this._set(DYExchangeBase.COL_DATA, _string(nVal)); }
	public getData() { return this.data; }
	public setData(nVal: any): this { this.data = nVal; return this; }
	get add_time() { return _string(this._data[DYExchangeBase.COL_ADD_TIME]); }
	set add_time(nVal: any) { this._set(DYExchangeBase.COL_ADD_TIME, _string(nVal)); }
	public getAddTime() { return this.add_time; }
	public setAddTime(nVal: any): this { this.add_time = nVal; return this; }
	get update_time() { return _string(this._data[DYExchangeBase.COL_UPDATE_TIME]); }
	set update_time(nVal: any) { this._set(DYExchangeBase.COL_UPDATE_TIME, _string(nVal)); }
	public getUpdateTime() { return this.update_time; }
	public setUpdateTime(nVal: any): this { this.update_time = nVal; return this; }
	get valid() { return _bool(this._data[DYExchangeBase.COL_VALID]); }
	set valid(nVal: any) { this._set(DYExchangeBase.COL_VALID, _bool(nVal)); }
	public getValid() { return this.valid; }
	public setValid(nVal: any): this { this.valid = nVal; return this; }

}
