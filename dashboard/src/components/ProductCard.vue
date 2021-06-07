<template>
	<div v-if="full">
		<div class="card">
			<LazyImage
					:src="image.small"
					:loadingSrc="image.full"
					:asBackground="true"
					class="card-img-top"
					style="height:200px;"
					:alt="product.name"
			/>
			<div class="card-body text-center">
				<div class="card-title mb-1" v-html="product.name"></div>
				<div class="text-muted">{{ productPriceFormatted }}</div>
				<div class="card-text m-2">
					<a
							v-if="canEdit"
							:href="editLink"
							class="btn btn-primary m-1"
							v-i18n="'edit'"
					></a>
					<span
							v-if="canDelete"
							@click="deleteItem(product)"
							class="btn btn-danger m-1"
							v-i18n="'delete'"
					></span>
				</div>
			</div>
			<div class="card-body">
				<p
						v-if="!showFullInfo"
						class="card-text mb-1"
						v-html="product.short_description"
				></p>
				<p
						v-else
						class="card-text mb-1"
						v-html="product.description"
				></p>
			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col-auto" v-i18n="'full_info'"></div>
					<div class="col-auto ml-auto">
						<label class="form-check form-switch m-0">
							<input
									class="form-check-input position-static"
									type="checkbox"
									:checked="showFullInfo"
									@change="toggleFullInfo"
							/>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div v-else-if="forCart" class="card card-link" :href="viewLink">
		<LazyImage
				:src="image.small"
				:loadingSrc="image.full"
				:asBackground="true"
				class="card-img-top"
				style="height:200px;"
				:alt="product.name"
		/>
		<div class="card-body text-center">
			<div class="card-title mb-1" v-html="product.name"></div>
			<div class="text-muted">{{ productPriceFormatted }}</div>
		</div>
		<div class="card-body">
			<div class="mb-3">
				<label class="form-label" v-i18n="'quantity'"></label>
				<input v-model.number="cartQuantity" type="number" class="form-control" min="1"
					   step="1" :placeholder="i18n('quantity')"/>
				<small class="form-hint text-right">= {{subTotalFormatted}}</small>
			</div>
			<div class="text-center">
					<span @click="removeFromCart" class="btn btn-danger btn-medium">
					<i class="fa fa-shopping-cart"></i>{{i18n("product.remove_from_cart")}}
				</span>
			</div>
		</div>
	</div>
	<a v-else class="card card-link" :href="viewLink">
		<LazyImage
				:src="image.small"
				:loadingSrc="image.full"
				:asBackground="true"
				class="card-img-top"
				style="height:200px;"
				:alt="product.name"
		/>
		<div class="card-body text-center">
			<div class="card-title mb-1" v-html="product.name"></div>
			<div class="text-muted">{{ productPriceFormatted }}</div>

		</div>
	</a>
</template>

<script lang="ts">
	import {defineComponent, computed, ref} from 'vue';
	import {DYProduct} from '@/gobl';
	import {fileUrl, routeLink, formatAmount, i18n} from '@/utils/helpers';
	import {dishIcon} from '@/assets';
	import LazyImage from './required/LazyImage.vue';
	import {useStore} from '@/composables';
	import app from '@/app';

	export default defineComponent({
		components: {LazyImage},
		name      : 'ProductCard',
		props     : {
			full   : {type: Boolean, default: false},
			forCart: {type: Boolean, default: false},
			product: {type: DYProduct, required: true},
		},
		setup(props) {
			const store                 = useStore(),
				  currentUser           = app.user.getCurrentUser(),
				  service               = store.services.companies,
				  {deleteItem}          = service.useDeleteItem(),
				  image                 = computed(() => {
					  const first = JSON.parse(props.product.images)[0];

					  return {
						  full : fileUrl(first, 0, dishIcon),
						  small: fileUrl(first, 2, dishIcon),
					  };
				  }),
				  company               = computed(() => {
					  return store.services.companies.identify(props.product.company_id);
				  }),
				  viewLink              = computed(() =>
					  routeLink(`/products/${props.product.id}/view`),
				  ), editLink           = computed(() =>
					  routeLink(`/products/${props.product.id}/edit`),
				  ),
				  canEdit               = computed(
					  () =>
						  (company.value && company.value.owner_id === currentUser.id) || store.isAdmin,
				  ),
				  canDelete             = computed(
					  () =>
						  (company.value && company.value.owner_id === currentUser.id) || store.isAdmin,
				  ),
				  productPriceFormatted = computed(() => {
					  const {product} = props;
					  return formatAmount(product.price, product.currency_code);
				  }),
				  showFullInfo          = ref(false),
				  toggleFullInfo        = function (e: any) {
					  showFullInfo.value = e.target.checked;
				  },
				  cartQuantity          = computed({
					  get   : () => {
						  return parseInt(store.cartQuantity(props.product) as any);
					  }, set: (quantity: number) => {
						  store.addToCart(props.product, parseInt(quantity as any) || 1);
					  }
				  }),
				  subTotalFormatted     = computed(
					  () => {
						  return formatAmount(cartQuantity.value * props.product.price, props.product.currency_code);
					  }
				  ),
				  removeFromCart        = function () {
					  store.removeFromCart(props.product);
				  };

			return {
				image,
				viewLink,
				editLink,
				canEdit,
				canDelete,
				deleteItem,
				productPriceFormatted,
				subTotalFormatted,
				cartQuantity,
				removeFromCart,

				showFullInfo,
				toggleFullInfo,
				i18n
			};
		},
	});
</script>
