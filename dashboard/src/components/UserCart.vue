<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<div v-if="!cart.length" class="flex-fill d-flex align-items-center justify-content-center">
			<div class="container-tight py-6">
				<div class="empty">
					<div class="empty-icon">
						<div class="display-4">
							<i class="fa fa-shopping-cart"></i>
						</div>
					</div>
					<p class="empty-title h3" v-i18n="'cart.is_empty'"></p>
					<p class="empty-subtitle text-muted" v-i18n="'cart.is_empty_help'"></p>
					<div class="empty-action">
						<a :href="routeLink('/products/discover')" class="btn btn-primary">
							<i class="fa fa-arrow-left"></i>{{i18n("product.browse")}}
						</a>
					</div>
				</div>
			</div>
		</div>
		<div v-else class="dy-cart-page-body">
			<div class="dy-cart-totals">
				<span>{{i18n("cart.totals",{total:cartTotalPriceFormatted})}}</span>
			</div>
			<div v-for="cartItem in cart" :key="cartItem">
				<ProductCard :product="cartItem.product" :for-cart="true"/>
			</div>

			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label" v-i18n="'cart.choose_location'"></label>
						<input v-model="locationAddress" type="number" class="form-control"
							   :placeholder="i18n('cart.location_address')"/>
					</div>

					<span class="btn btn-primary btn-block" @click="toggleLocationChooserModal">
					<i class="fa fa-map-marked"></i> {{i18n("cart.choose_location")}}
				</span>
				</div>
			</div>
			<PayModal :amount="cartTotalPrice" :currency="cartCurrencyCode" v-if="payModal" />
			<span class="btn btn-success btn-block" @click="togglePaymentModal">
					<i class="fa fa-money-bill"></i> {{i18n("cart.pay")}}
			</span>
		</div>
	</Page>
</template>

<script lang="ts">
	import {defineComponent, computed, ref} from 'vue';
	import Page from '@/components/Page.vue';
	import ProductCard from './ProductCard.vue';
	import {useStore} from '@/composables';
	import {formatAmount, i18n, routeLink} from '@/utils/helpers';
	import {DYProduct} from '@/gobl';
	import app from '@/app';
	import PayModal from '@/components/PayModal.vue';

	export default defineComponent({
		name      : 'UserCart',
		components: {
			Page,
			ProductCard,
			PayModal
		},
		setup() {
			const store                      = useStore(),
				  cart                       = computed(() => store.cart),
				  cartCurrencyCode = ref('USD'),
				  cartTotalPrice    = computed(() => {
					  return store.cart.reduce(function (acc, item) {
						  const p = item.product as DYProduct;
						  return acc + (p.price * item.quantity);
					  }, 0);
				  }), cartTotalPriceFormatted    = computed(() => {

					  return formatAmount(cartTotalPrice.value, cartCurrencyCode.value);
				  }),
				  locationModal              = ref(false),
				  payModal                   = ref(false),
				  locationPlace              = computed({
					  get: () => app.ls.get('cart_location'),
					  set: (place: any) => { app.ls.set('cart_place', place);}
				  }),
				  locationName               = computed(() => {
					  return 'No Location chosen';
				  }),
				  locationAddress            = ref(''),
				  locationChanged            = function (loc: any) {
					  console.log(loc);
				  },
				  togglePaymentModal         = function () {
					  payModal.value = !payModal.value;
				  },
				  toggleLocationChooserModal = function () {
					  locationModal.value = !locationModal.value;
					  const option        = {
						  enableHighAccuracy: true // use GPS as much as possible
					  };

					  if (window.navigator) {
						  navigator.geolocation.getCurrentPosition((...args: any[]) => {
							  console.log('Location success', args);
						  }, (...args: any[]) => {
							  console.log('Location error', args);
						  }, option);
					  }
				  };

			return {
				cart,
				cartTotalPrice,
				cartTotalPriceFormatted,
				cartCurrencyCode,
				payModal,
				locationModal,
				locationChanged,
				locationName,
				locationAddress,
				locationPlace,
				toggleLocationChooserModal,
				togglePaymentModal,

				i18n,
				routeLink
			};
		},
	});
</script>
