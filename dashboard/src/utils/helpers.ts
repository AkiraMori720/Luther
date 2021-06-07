import app from '@/app';
import { OFileQuality, OI18nData, OI18nPluralize, OWebDate } from 'oweb';
import { OZUser } from '@/gobl';
import OWebTelInput from 'oweb-tel-input';

const USER_PIC = require('../assets/images/user-pic.png');
const USER_MALE = require('../assets/images/user-male.png');
const USER_FEMALE = require('../assets/images/user-female.png');

export function i18n(
	key: string,
	data: OI18nData = {},
	pluralize?: OI18nPluralize,
	lang?: string,
) {
	return app.i18n.toHuman(key, data, pluralize, lang);
}

export function notifyOffline() {
	return (
		!window.navigator.onLine &&
		app.view.dialog({
			type: 'error',
			text: 'OW_I18N_YOU_ARE_OFFLINE',
		})
	);
}

export function fileUrl(file: string, quality: OFileQuality = 0, def?: string) {
	const parts = file.split('_'),
		o = '0';
	let url = app.url.get('OZ_SERVER_GET_FILE_URI'),
		fileId = o,
		fileKey = o;

	if (parts.length === 2) {
		fileId = parts[0];
		fileKey = parts[1];
	}

	if (def && (fileId === o || fileKey === o)) {
		return def;
	}

	const data: any = {
		'{oz_file_id}': fileId,
		'{oz_file_key}': fileKey,
		'{oz_file_quality}': quality,
	};

	Object.keys(data).forEach(function(key) {
		url = url.replace(key, data[key]);
	});

	return url;
}

export function routeLink(path: string): string {
	return app.router.pathToURL(path).href;
}

export function browseTo(route: string) {
	app.router.browseTo(route);
}

export function userPic(user: OZUser, quality: 0 | 1 | 2 | 3 = 0) {
	let pic = USER_PIC;
	const gender = (user.gender || '').toLowerCase();

	if (gender === 'male') {
		pic = USER_MALE;
	} else if (gender === 'female') {
		pic = USER_FEMALE;
	}
	return fileUrl(user.getPicid(), quality, pic);
}

export function formatPhone(phone: string) {
	phone = phone && String(phone).trim();

	return phone
		? new OWebTelInput({ phoneNumber: phone }).getInput(true)
		: phone;
}

export function formatAmount(
	amount: number | string,
	currency = 'XOF',
	local = 'fr-FR',
) {
	return Number(amount).toLocaleString(local, {
		style: 'currency',
		currency,
	});
}

export function formatDate(unixTimestamp: number, format = 'd F Y, hh:ii a') {
	const d = new OWebDate(app, unixTimestamp * 1000);

	return d.format(format);
}

export function formatDateInput(
	unixTimestamp: number,
	format = 'Y-mm-dThh:ii',
) {
	const d = new OWebDate(app, unixTimestamp * 1000);

	return d.format(format);
}

export function shortText(text: string, len?: number, ellipsis?: string) {
	len = len || 100;
	ellipsis = text.length > len ? ellipsis || '...' : '';
	text = text.substr(0, len);
	return text.length ? text + ellipsis : '';
}

export function lineToBr(text: string) {
	return (text || '').replace(/\\r\\n?|\\n/g, '<br/>');
}
