import {isPlainObject, OWebUser} from 'oweb';
import {GoblEntity, toInstance} from 'gobl-utils-ts';

export default class User<UserEntity extends GoblEntity> extends OWebUser<UserEntity> {
	getCurrentUser(): UserEntity | undefined {
		const data: any = super.getCurrentUser();
		let user;

		if (data && data.id && typeof data.getId === 'function') {
			return data;
		} else if (
			isPlainObject(data) &&
			(user = toInstance(data, true))
		) {
			return user as any;
		}

		return undefined;
	}
}
