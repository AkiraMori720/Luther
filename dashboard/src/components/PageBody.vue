<template>
	<slot v-if="bodyFill"/>
	<div v-else class="content" style="overflow: visible;">
		<div class="container-xl">
			<slot/>
		</div>
	</div>
</template>

<script lang="ts">
	import {defineComponent} from 'vue';

	export default defineComponent({
		name : 'PageBody',
		props: {
			bodyFill: {type: Boolean, default: false},
		}
	});
</script>
