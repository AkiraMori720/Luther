<template>
	<div v-if="full">
		<div class="card">
			<div class="card-body text-center">
				<div class="mb-3">
					<span class="avatar avatar-xl" :style="avatarStyles"></span>
				</div>
				<div class="card-title mb-1" v-html="company.name"></div>
				<div class="card-text m-2">
					<a
						v-if="canAddProduct"
						:href="productAddLink"
						class="btn btn-success m-1"
						v-i18n="'product.add'"
					></a
					><a
						v-if="canEdit"
						:href="editLink"
						class="btn btn-primary m-1"
						v-i18n="'edit'"
					></a>
					<span
						v-if="canDelete"
						@click="deleteItem(company)"
						class="btn btn-danger m-1"
						v-i18n="'delete'"
					></span>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body text-left">
				<p
					v-if="!showFullInfo"
					class="card-text mb-1"
					v-html="company.short_description"
				></p>
				<p
					v-else
					class="card-text mb-1"
					v-html="company.description"
				></p>
			</div>
			<div class="card-footer">
				<div class="row align-items-center">
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
	<a v-else class="card card-link" :href="viewLink">
		<div class="card-body text-center">
			<div class="mb-3">
				<span class="avatar avatar-xl" :style="avatarStyles"></span>
			</div>
			<div class="card-title mb-1" v-html="company.name"></div>
		</div>
	</a>
</template>

<script lang="ts">
import { defineComponent, computed, ref } from 'vue';
import { DYCompany } from '@/gobl';
import { fileUrl, routeLink } from '@/utils/helpers';
import { companyLogo } from '@/assets';
import { useStore } from '@/composables';
import app from '@/app';

export default defineComponent({
	name: 'CompanyCard',
	props: {
		full: { type: Boolean, default: false },
		company: { type: DYCompany, required: true },
	},
	setup(props) {
		const store = useStore(),
			currentUser = app.user.getCurrentUser(),
			service = store.services.companies,
			{ deleteItem } = service.useDeleteItem(),
			editLink = computed(() =>
				routeLink(`/companies/${props.company.id}/edit`),
			),
			viewLink = computed(() =>
				routeLink(`/companies/${props.company.id}/view`),
			),
			productAddLink = computed(() =>
				routeLink(`/companies/${props.company.id}/add-product`),
			),
			canEdit = computed(
				() =>
					props.company.owner_id === currentUser.id || store.isAdmin,
			),
			canDelete = computed(
				() =>
					props.company.owner_id === currentUser.id || store.isAdmin,
			),
			canAddProduct = computed(
				() =>
					props.company.owner_id === currentUser.id || store.isAdmin,
			),
			avatarStyles = computed(() => {
				const pic = fileUrl(props.company.image, 0, companyLogo);

				return {
					backgroundImage: `url(${pic})`,
				};
			}),
			showFullInfo = ref(false),
			toggleFullInfo = function(e: any) {
				showFullInfo.value = e.target.checked;
			};

		return {
			viewLink,
			editLink,
			productAddLink,
			canEdit,
			canDelete,
			deleteItem,
			canAddProduct,

			avatarStyles,
			showFullInfo,
			toggleFullInfo,
		};
	},
});
</script>
