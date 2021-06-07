<template>
	<Page :show-header="true" :show-nav-bar="true" :show-footer="true">
		<div class="row row-cards row-deck">
			<div class="col-sm-4" v-for="item in menuItems" :key="item.path">
				<div
					class="card"
					style="cursor: pointer"
					@click="browseTo(item.path)"
				>
					<div class="card-body p-4 py-5 text-center">
						<span
							class="avatar avatar-xl mb-4"
							:style="menuItemStyles(item)"
						></span>
						<h3 class="mb-0" v-i18n="item.label"></h3>
						<p
							class="text-muted"
							v-if="item.sub_title"
							v-i18n="item.sub_title"
						></p>
					</div>
					<div class="progress card-progress">
						<div
							class="progress-bar"
							style="width: 100%"
							role="progressbar"
							aria-valuenow="100"
							aria-valuemin="0"
							aria-valuemax="100"
						>
							<span class="sr-only"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cards row-deck">
			<div class="col-sm-4" v-for="stat in stats" :key="stat.label">
				<div class="card">
					<div class="card-body p-2 text-center">
						<div class="text-right text-red">
							<span
								class="text-red d-inline-flex align-items-center lh-1"
							></span>
						</div>
						<div class="h1 m-0">{{ stat.value }}</div>
						<div class="text-muted mb-4" v-i18n="stat.label"></div>
					</div>
				</div>
			</div>
		</div>
	</Page>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import Page from '@/components/Page.vue';
import {
	restaurantIcon,
	deliveryIcon,
	billIcon,
	dishIcon,
	cartIcon,
	searchIcon,
} from '@/assets';

import { browseTo } from '@/utils/helpers';

const MAIN_MENU_ITEMS_LIST = [
	{
		path: '/companies',
		icon: restaurantIcon,
		label: 'restaurants',
		color: '',
		show: true,
	},
	{
		path: '/products/discover',
		icon: dishIcon,
		label: 'dishes',
		color: '',
		show: true,
	},
	{
		path: '/deliveries',
		icon: deliveryIcon,
		label: 'deliveries',
		color: '',
		show: false,
	},
	{
		path: '/bills',
		icon: billIcon,
		label: 'bills',
		color: '',
	},
	{
		path: '/search',
		icon: searchIcon,
		label: 'search',
		color: '',
		show: false,
	},
	{
		path: '/cart',
		icon: cartIcon,
		label: 'cart.page_title',
		color: '',
		show: true,
	},
];
export default defineComponent({
	name: 'PDashboard',
	components: {
		Page,
	},
	setup() {
		const menuItems = MAIN_MENU_ITEMS_LIST.filter((item)=> item.show),
			menuItemStyles = function(item: any) {
				return {
					backgroundImage: `url(${item.icon})`,
					backgroundPosition: 'center',
					backgroundSize: 'contain',
					backgroundColor: 'transparent',
					borderRadius: '0',
				};
			},
			stats = [
				{
					label: 'dishes',
					value: 20,
				},
				{
					label: 'restaurants',
					value: 9,
				},
				{
					label: 'orders',
					value: 20,
				},
			];
		return {
			menuItems,
			menuItemStyles,
			stats,
			browseTo,
		};
	},
});
</script>
