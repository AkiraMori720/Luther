<template>
	<div v-if="0" class="navbar-expand-md">
		<div class="collapse navbar-collapse" id="navbar-menu">
			<div class="navbar navbar-light">
				<div class="container-xl">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="./index.html">
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<polyline
											points="5 12 3 12 12 3 21 12 19 12"
										/>
										<path
											d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
										/>
										<path
											d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
										/>
									</svg>
								</span>
								<span class="nav-link-title">
									Home
								</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#navbar-base"
								data-toggle="dropdown"
								role="button"
								aria-expanded="false"
							>
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<polyline
											points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
										/>
										<line
											x1="12"
											y1="12"
											x2="20"
											y2="7.5"
										/>
										<line x1="12" y1="12" x2="12" y2="21" />
										<line x1="12" y1="12" x2="4" y2="7.5" />
										<line
											x1="16"
											y1="5.25"
											x2="8"
											y2="9.75"
										/>
									</svg>
								</span>
								<span class="nav-link-title">
									User Interface
								</span>
							</a>
							<ul
								class="dropdown-menu dropdown-menu-columns  dropdown-menu-columns-2"
							>
								<li>
									<a
										class="dropdown-item"
										href="./empty.html"
									>
										Empty page
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./blank.html"
									>
										Blank page
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./buttons.html"
									>
										Buttons
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./cards.html"
									>
										Cards
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./dropdowns.html"
									>
										Dropdowns
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./icons.html"
									>
										Icons
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./modals.html"
									>
										Modals
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="./maps.html">
										Maps
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./maps-vector.html"
									>
										Vector maps
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./navigation.html"
									>
										Navigation
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./charts.html"
									>
										Charts
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./tables.html"
									>
										Tables
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./calendar.html"
									>
										Calendar
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./carousel.html"
									>
										Carousel
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./lists.html"
									>
										Lists
									</a>
								</li>
								<li class="dropright">
									<a
										class="dropdown-item dropdown-toggle"
										href="#sidebar-authentication"
										data-toggle="dropdown"
										role="button"
										aria-expanded="false"
									>
										Authentication
									</a>
									<div class="dropdown-menu">
										<a
											href="./sign-in.html"
											class="dropdown-item"
											>Sign in</a
										>
										<a
											href="./sign-up.html"
											class="dropdown-item"
											>Sign up</a
										>
										<a
											href="./forgot-password.html"
											class="dropdown-item"
											>Forgot password</a
										>
										<a
											href="./terms-of-service.html"
											class="dropdown-item"
											>Terms of service</a
										>
									</div>
								</li>
								<li class="dropright">
									<a
										class="dropdown-item dropdown-toggle"
										href="#sidebar-error"
										data-toggle="dropdown"
										role="button"
										aria-expanded="false"
									>
										Error pages
									</a>
									<div class="dropdown-menu">
										<a
											href="./400.html"
											class="dropdown-item"
											>400 page</a
										>
										<a
											href="./401.html"
											class="dropdown-item"
											>401 page</a
										>
										<a
											href="./403.html"
											class="dropdown-item"
											>403 page</a
										>
										<a
											href="./404.html"
											class="dropdown-item"
											>404 page</a
										>
										<a
											href="./500.html"
											class="dropdown-item"
											>500 page</a
										>
										<a
											href="./503.html"
											class="dropdown-item"
											>503 page</a
										>
										<a
											href="./maintenance.html"
											class="dropdown-item"
											>Maintenance page</a
										>
									</div>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./form-elements.html">
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<polyline points="9 11 12 14 20 6" />
										<path
											d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"
										/>
									</svg>
								</span>
								<span class="nav-link-title">
									Form elements
								</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#navbar-extra"
								data-toggle="dropdown"
								role="button"
								aria-expanded="false"
							>
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<path
											d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z"
										/>
									</svg>
								</span>
								<span class="nav-link-title">
									Extra
								</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a
										class="dropdown-item"
										href="./invoice.html"
									>
										Invoice
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="./blog.html">
										Blog cards
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./snippets.html"
									>
										Snippets
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./search-results.html"
									>
										Search results
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./pricing.html"
									>
										Pricing cards
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./users.html"
									>
										Users
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./gallery.html"
									>
										Gallery
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./profile.html"
									>
										Profile
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./music.html"
									>
										Music
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#navbar-layout"
								data-toggle="dropdown"
								role="button"
								aria-expanded="false"
							>
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<rect
											x="4"
											y="4"
											width="6"
											height="5"
											rx="2"
										/>
										<rect
											x="4"
											y="13"
											width="6"
											height="7"
											rx="2"
										/>
										<rect
											x="14"
											y="4"
											width="6"
											height="7"
											rx="2"
										/>
										<rect
											x="14"
											y="15"
											width="6"
											height="5"
											rx="2"
										/>
									</svg>
								</span>
								<span class="nav-link-title">
									Layout
								</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a
										class="dropdown-item"
										href="./layout-horizontal.html"
									>
										Horizontal
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-vertical.html"
									>
										Vertical
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-vertical-right.html"
									>
										Right vertical
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-condensed.html"
									>
										Condensed
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-condensed-dark.html"
									>
										Condensed dark
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-combo.html"
									>
										Combined
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-navbar-dark.html"
									>
										Navbar dark
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-dark.html"
									>
										Dark mode
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-fluid.html"
									>
										Fluid
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./layout-fluid-vertical.html"
									>
										Fluid vertical
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#navbar-docs"
								data-toggle="dropdown"
								role="button"
								aria-expanded="false"
							>
								<span
									class="nav-link-icon d-md-none d-lg-inline-block"
									><svg
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<polyline points="14 3 14 8 19 8" />
										<path
											d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
										/>
										<line x1="9" y1="9" x2="10" y2="9" />
										<line x1="9" y1="13" x2="15" y2="13" />
										<line x1="9" y1="17" x2="15" y2="17" />
									</svg>
								</span>
								<span class="nav-link-title">
									Docs
								</span>
							</a>
							<ul
								class="dropdown-menu dropdown-menu-columns  dropdown-menu-columns-3"
							>
								<li>
									<a
										class="dropdown-item"
										href="./docs/index.html"
									>
										Introduction
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/alerts.html"
									>
										Alerts
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/autosize.html"
									>
										Autosize
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/avatars.html"
									>
										Avatars
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/badges.html"
									>
										Badges
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/breadcrumb.html"
									>
										Breadcrumb
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/buttons.html"
									>
										Buttons
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/cards.html"
									>
										Cards
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/carousel.html"
									>
										Carousel
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/colors.html"
									>
										Colors
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/countup.html"
									>
										Countup
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/cursors.html"
									>
										Cursors
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/charts.html"
									>
										Charts
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/dropdowns.html"
									>
										Dropdowns
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/divider.html"
									>
										Divider
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/empty.html"
									>
										Empty states
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/flags.html"
									>
										Flags
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/form-elements.html"
									>
										Form elements
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/form-helpers.html"
									>
										Form helpers
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/input-mask.html"
									>
										Form input mask
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/modals.html"
									>
										Modals
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/progress.html"
									>
										Progress
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/payments.html"
									>
										Payments
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/range-slider.html"
									>
										Range slider
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/ribbons.html"
									>
										Ribbons
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/spinners.html"
									>
										Spinners
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/steps.html"
									>
										Steps
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/tables.html"
									>
										Tables
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/tabs.html"
									>
										Tabs
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/timelines.html"
									>
										Timelines
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/toasts.html"
									>
										Toasts
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/tooltips.html"
									>
										Tooltips
									</a>
								</li>
								<li>
									<a
										class="dropdown-item"
										href="./docs/typography.html"
									>
										Typography
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<div
						class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last"
					>
						<form action="." method="get">
							<div class="input-icon">
								<span class="input-icon-addon">
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
										<path stroke="none" d="M0 0h24v24H0z" />
										<circle cx="10" cy="10" r="7" />
										<line x1="21" y1="21" x2="15" y2="15" />
									</svg>
								</span>
								<input
									type="text"
									class="form-control"
									placeholder="Search…"
								/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
	name: 'PageNavBar',
});
</script>
