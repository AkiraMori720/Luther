import { OWebI18n, forEach } from 'oweb';
import en from './en';
import fr from './fr';

forEach({ fr, en }, function(value, code) {
	OWebI18n.loadLangData(code, value);
});
