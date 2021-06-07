<template>
	<div class="card">
		<div class="card-status-top bg-danger"></div>
		<div class="card-body">
			<h3 class="card-title" v-i18n="title"></h3>
			<p v-i18n="error"></p>
		</div>
	</div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
	name: 'PageError',
	props: {
		title: { required: true },
		error: { required: true },
	},
});
</script>
