import { OAppConfigs } from 'oweb';

const DEBUG = process.env.NODE_ENV !== 'production',
	API_URL = DEBUG ? process.env.API_DEV : process.env.API,
	API_KEY = DEBUG ? process.env.API_KEY_DEV : process.env.API_KEY;

const wLoc = window.location,
	wDoc = window.document,
	htmlReg = /[^/]+\.html$/i,
	useHash = true,
	baseUri = useHash ? wDoc.baseURI || wLoc.origin : wLoc.origin,
	appUrl = useHash
		? wLoc.protocol + '//' + wLoc.host + wLoc.pathname.replace(htmlReg, '')
		: baseUri.replace(htmlReg, '').replace(wLoc.hash, '');

export default {
	OW_APP_NAME: process.env.NAME,
	OW_APP_VERSION: process.env.VERSION,
	OW_APP_LOCAL_BASE_URL: appUrl,
	OW_APP_ROUTER_HASH_MODE: useHash,
	OW_APP_ALLOWED_COUNTRIES: ['bj'],

	OZ_API_KEY: API_KEY,
	OZ_API_BASE_URL: API_URL,
} as OAppConfigs;
