<template>
	<div class="flex-fill d-flex flex-column justify-content-center">
		<div class="container-tight py-6">
			<OForm class="card-md" :form="form" @submit.prevent="sendForm" />
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent, computed } from 'vue';
import app from '@/app';
import OForm from '@/components/required/forms/OForm.vue';
import { useStore } from '@/composables';
import { DYCategory } from '@/gobl';

export default defineComponent({
	name: 'CategoryEditForm',
	components: {
		OForm,
	},
	props: {
		category: { type: DYCategory, required: true },
	},
	setup(props) {
		const store = useStore(),
			service = store.services.categories,
			category = computed(() => props.category);

		return service.useEditForm(category, {
			onRequestCreated(req) {
				req.onGoodNews(function() {
					app.router.goBack();
					app.view.dialog({
						type: 'done',
						text: 'category.updated',
					});
				});
			},
		});
	},
});
</script>
