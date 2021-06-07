import { OWebFormValidator } from 'oweb';
import OWebTelInput from 'oweb-tel-input';

OWebFormValidator.addFieldValidators({
	phone: function(value: any, name: string, fv: OWebFormValidator) {
		fv.assert(
			OWebTelInput.isPhoneNumberPossible(value, true),
			'OZ_FIELD_PHONE_INVALID',
		);
		const oti = new OWebTelInput({ phoneNumber: value }),
			phone: string = oti.getInput(),
			cc2: string = oti.getCurrentCountry().cc2;

		fv.setField(name, phone.replace(/[ -]/g, ''));

		// set only if it is not already set
		// we may have multiple phone field or a cc2 field
		if (!fv.getField('cc2')) {
			fv.setField('cc2', cc2);
		}
	},
});
