<template>
	<div v-if="full" class="card">
		<div class="card-body text-center">
			<div class="mb-3">
				<LazyImage
					:src="imageUrl"
					:loadingSrc="imageUrlSmall"
					class="avatar avatar-xl"
					:alt="category.name"
				/>
			</div>
			<div class="card-title mb-1" v-html="category.name"></div>
			<div class="card-text m-2">
				<a
					v-if="canEdit"
					:href="editLink"
					class="btn btn-primary m-1"
					v-i18n="'edit'"
				></a>
				<span
					v-if="canDelete"
					@click="deleteItem(category)"
					class="btn btn-danger m-1"
					v-i18n="'delete'"
				></span>
			</div>
		</div>
	</div>
	<a v-else class="card card-link" :href="viewLink">
		<div class="row row-0">
			<div class="col-3">
				<LazyImage
					:src="imageUrl"
					:loadingSrc="imageUrlSmall"
					class="w-100 h-100 object-cover"
					:alt="category.name"
				/>
			</div>
			<div class="col">
				<div class="card-body">
					<h3 class="card-title" v-html="category.name"></h3>
					<p v-html="shortText(category.short_description, 40)"></p>
				</div>
			</div>
		</div>
	</a>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import { DYCategory } from '@/gobl';
import { fileUrl, routeLink, shortText } from '@/utils/helpers';
import { categoryIcon } from '@/assets';
import LazyImage from './required/LazyImage.vue';
import { useStore } from '@/composables';

export default defineComponent({
	components: { LazyImage },
	name: 'CategoryCard',
	props: {
		full: { type: Boolean, default: false },
		category: { type: DYCategory, required: true },
	},
	setup(props) {
		const store = useStore(),
			service = store.services.categories,
			{ deleteItem } = service.useDeleteItem(),
			editLink = computed(() =>
				routeLink(`/categories/${props.category.id}/edit`),
			),
			viewLink = computed(() =>
				routeLink(`/categories/${props.category.id}/view`),
			),
			canEdit = computed(() => store.isAdmin),
			canDelete = computed(() => store.isAdmin),
			imageUrl = computed(() => {
				return fileUrl(props.category.image, 0, categoryIcon);
			}),
			imageUrlSmall = computed(() => {
				return fileUrl(props.category.image, 2, categoryIcon);
			});

		return {
			viewLink,
			editLink,
			canEdit,
			canDelete,
			deleteItem,

			imageUrl,
			imageUrlSmall,
			shortText,
		};
	},
});
</script>
