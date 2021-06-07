import {DYCategory} from '@/gobl';
import {OWebApp} from 'oweb';
import {readonly, Ref, ref, watch} from 'vue';
import RootStore from './root';
import DYProduct from '@/gobl/db/DYProduct';

type CartItem = { product: DYProduct; quantity: number };

class Store extends RootStore {
	private state = {
		isAdmin    : ref(false),
		isDeliverer: ref(false),
		categories : ref([]) as Ref<DYCategory[]>,
		cart       : ref([]) as Ref<CartItem[]>,
	};

	constructor(context: OWebApp) {
		super(context);
		this.state.cart.value = context.ls.get('cart') || [];

		watch(this.state.cart, (v) => {
			const cart = v as [];
			context.ls.set('cart', cart);
		}, {deep: true});
	}

	getState() {
		return readonly({...this.rootState, ...this.state});
	}

	set isAdmin(payload: boolean) {
		this.state.isAdmin.value = payload;
	}

	get isAdmin() {
		return this.state.isAdmin.value;
	}

	set isDeliverer(payload: boolean) {
		this.state.isDeliverer.value = payload;
	}

	get isDeliverer() {
		return this.state.isDeliverer.value;
	}

	set categories(payload: DYCategory[]) {
		this.state.categories.value = payload;
	}

	get categories() {
		return this.state.categories.value;
	}

	get cart() {
		return readonly(this.state.cart.value);
	}

	private _findInCart(product: DYProduct) {
		const cart = this.state.cart.value;
		for (let i = 0; i < cart.length; i++) {
			if (cart[i].product.id === product.id) {
				return cart[i];
			}
		}

		return false;
	}

	isInCart(product: DYProduct) {
		return this._findInCart(product) !== false;
	}

	cartQuantity(product: DYProduct) {
		const item = this._findInCart(product);
		if (item) {
			return item.quantity;
		}
		return 1;
	}

	addToCart(product: DYProduct, quantity = 1) {
		const item = this._findInCart(product),
			  cart = this.state.cart.value;
		if (item === false) {
			cart.push({product, quantity});
		} else {
			item.product  = product;
			item.quantity = quantity;
		}
		return this;
	}

	removeFromCart(product: DYProduct) {
		const cart = this.state.cart.value;
		for (let i = 0; i < cart.length; i++) {
			if (cart[i].product.id === product.id) {
				cart.splice(i, 1);
				return true;
			}
		}

		return false;
	}
}

export const storeBundle = function (this: OWebApp): Store {
	return new Store(this);
};
