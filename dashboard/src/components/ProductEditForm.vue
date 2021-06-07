<template>
	<div class="flex-fill d-flex flex-column justify-content-center">
		<div class="container-tight py-6">
			<OForm class="card-md" :form="form" @submit.prevent="sendForm"/>
		</div>
	</div>
</template>

<script lang="ts">
	import {defineComponent, computed} from 'vue';
	import app from '@/app';
	import OForm from '@/components/required/forms/OForm.vue';
	import {useStore} from '@/composables';
	import {DYProduct} from '@/gobl';

	export default defineComponent({
		name      : 'ProductEditForm',
		components: {
			OForm,
		},
		props     : {
			product: {type: DYProduct, required: true},
		},
		setup(props) {
			const store   = useStore(),
				  service = store.services.products,
				  product = computed(() => props.product);

			return service.useEditForm(product, {
				onRequestCreated(req) {
					req.onGoodNews(function () {
						app.router.goBack();
						app.view.dialog({
							type: 'done',
							text: 'product.updated',
						});
					});
				},
			});
		},
	});
</script>
