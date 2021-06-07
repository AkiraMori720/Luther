<template>
	<div class="dy-cart-pay-modal">
		<div class="card my-2">
			<div class="card-body">
				<div class="mb-3">
					<div class="form-label">Card number</div>
					<input type="text" name="input-mask" class="form-control" data-mask="0000 0000 0000 0000" data-mask-visible="true" autocomplete="off">
				</div>
				<div class="mb-3">
					<div class="form-label">Card name</div>
					<input type="text" class="form-control">
				</div>
				<div class="row">
					<div class="col-8">
						<div class="mb-3">
							<label class="form-label">Expiration date</label>
							<div class="row row-sm">
								<div class="col">
									<select class="form-select">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="col">
									<select class="form-select">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
										<option value="2028">2028</option>
										<option value="2029">2029</option>
										<option value="2030">2030</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="mb-3">
							<div class="form-label">CVV</div>
							<input type="number" class="form-control">
						</div>
					</div>
				</div>
				<div class="mt-2">
					<a href="#" class="btn btn-primary btn-block">
						Pay now
					</a>
				</div>
			</div>
		</div>
	</div>
</template>

<script lang="ts">
	import {defineComponent, computed, ref} from 'vue';

	export default defineComponent({
		name      : 'PayModal',
		props     : {
			amount  : {type: Number, required: true},
			currency: {type: String, required: true},
		},
		components: {
		},
		setup() {
			const keys       = {
					  test: {
						  pk: 'pk_live_51I5Du7DSKZ7kygnil8wh3m0waWKehAtb8UmQIWp2sGW31d1rN59bH5cHqPVmBdbCmR0bmduBaEZgMOBweC05ZtZb00TUmjQPgM'
					  },
					  live: {
						  pk: ''
					  }
				  },
				  isTestMode = ref(true),
				  pk         = computed(() => keys[isTestMode.value ? 'test' : 'live'].pk);

			return {
				pk
			};
		},
	});
</script>
