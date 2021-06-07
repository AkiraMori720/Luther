<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true" :body-fill="true">
		<Loader v-if="loading && !item" :full="true"/>
		<PageError
				v-else-if="!item"
				:title="title"
				:error="itemLoadErrorMessage"
		/>
		<div v-else>
			<ProductCard :full="true" :product="item"/>
			<div class="text-center">
				<span v-if="!isInCart" @click="addToCart" class="btn btn-success btn-medium">
					<i class="fa fa-shopping-cart"></i>{{i18n("product.add_to_cart")}}
				</span>
				<span v-else @click="removeFromCart" class="btn btn-danger btn-medium">
					<i class="fa fa-shopping-cart"></i> {{i18n("product.remove_from_cart")}}
				</span>
			</div>
		</div>
	</Page>
</template>

<script lang="ts">
	import {defineComponent, computed} from 'vue';
	import Page from '@/components/Page.vue';
	import PageError from '@/components/PageError.vue';
	import Loader from '@/components/required/Loader.vue';
	import ProductCard from './ProductCard.vue';
	import {useStore} from '@/composables';
	import {i18n} from '@/utils/helpers';

	export default defineComponent({
		name      : 'ProductView',
		components: {
			Page,
			PageError,
			Loader,
			ProductCard,
		},
		setup() {
			const store                      = useStore(),
				  service                    = store.services.products,
				  {loading, error, item, id} = service.useItemLoader(),
				  isInCart                   = computed(() => item.value && store.isInCart(item.value)),
				  addToCart                  = function () {
					  item.value && store.addToCart(item.value, 1);
				  },
				  removeFromCart             = function () {
					  item.value && store.removeFromCart(item.value);
				  };

			id.value = store.routeContext.getToken('id');

			return {
				title               : 'product.item_singular',
				itemLoadErrorMessage: 'product.item_load_error',
				loading,
				error,
				item,

				isInCart,
				addToCart,
				removeFromCart,
				i18n
			};
		},
	});
</script>
