<template>
	<header class="navbar navbar-expand-md navbar-light">
		<div class="container-xl">
			<div class="nav-item dropdown">
				<a
						href="#"
						class="nav-link d-flex lh-1 text-reset p-0"
						data-toggle="dropdown"
				>
					<span class="avatar" :style="avatarStyles"></span>
					<div class="d-none d-xl-block pl-2">
						<div v-html="user.name"></div>
						<div class="mt-1 small text-muted"></div>
					</div>
				</a>
				<div
						class="dropdown-menu dropdown-menu-left"
						v-if="menuItems.length"
				>
					<a
							class="dropdown-item"
							v-for="item in menuItems"
							:key="item.path"
							:href="routeLink(item.path)"
							v-i18n="item.label"
					>
					</a>
				</div>
			</div>
			<a
					href="#"
					class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3"
			>
				<img :src="appLogo" :alt="appName" class="navbar-brand-image"/>
			</a>
			<div class="navbar-nav flex-row order-md-last">
				<div v-if="0" class="nav-item dropdown d-none d-md-flex mr-3">
					<a
							href="#"
							class="nav-link px-0"
							data-toggle="dropdown"
							tabindex="-1"
					>
						<svg
								xmlns="http://www.w3.org/2000/svg"
								class="icon"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								stroke-width="2"
								stroke="currentColor"
								fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
						>
							<path stroke="none" d="M0 0h24v24H0z"/>
							<path
									d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
							/>
							<path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
						</svg>
						<span class="badge bg-red"></span>
					</a>
					<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-card"
					>
						<div class="card">
							<div class="card-body">
								Lorem ipsum dolor sit amet, consectetur
								adipisicing elit. Accusamus ad amet consectetur
								exercitationem fugiat in ipsa ipsum, natus odio
								quidem quod repudiandae sapiente. Amet debitis
								et magni maxime necessitatibus ullam.
							</div>
						</div>
					</div>
				</div>
				<a
						:href="routeLink('/cart')"
						class="nav-link d-flex lh-1 text-reset dy-header-cart-btn"
				>
					<span :style="isCartEmpty? 'color: var(--main-color-bg)': ''" class="fa fa-shopping-cart"></span>
				</a>
			</div>
		</div>
	</header>
</template>

<script lang="ts">
	import {defineComponent, computed} from 'vue';
	import {appLogo} from '@/assets';
	import app from '@/app';
	import {userPic, routeLink} from '@/utils/helpers';
	import {useStore} from '@/composables';

	export default defineComponent({
		name: 'PageHeader',
		setup() {
			const store          = useStore(),
				  user           = app.user.getCurrentUser(),
				  avatarStyles   = computed(() => ({
					  backgroundImage: `url(${userPic(user)})`,
				  })),
				  menuItems      = [
					  {
						  label: 'logout',
						  path : app.url.get('OW_APP_PATH_LOGOUT'),
					  },
					  {
						  label: 'company.add',
						  path : '/companies/add',
					  },
					  {
						  label: 'category.add',
						  path : '/categories/add',
					  },

					  {
						  label: 'category.list',
						  path : '/categories',
					  },
				  ], isCartEmpty = computed(() => store.cart.length);

			return {
				appName: app.getAppName(),
				user,
				avatarStyles,
				appLogo,
				menuItems,
				routeLink,
				isCartEmpty
			};
		},
	});
</script>
