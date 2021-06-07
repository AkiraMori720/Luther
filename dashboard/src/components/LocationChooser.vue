<template>
	<div class="dy-map-container">
		<PlaceSearch
				:ready="ready"
				:placeholder="i18n('map.search_placeholder')"
				:loading="i18n('map.is_loading')"
				:fallbackProcedure="fallbackProcedure"
				:zoom="zoom"
				:geolocation="geolocation"
				:gps_timeout="3000"
				:address="address"
				@changed="locationChanged"
		>
		</PlaceSearch>
	</div>
</template>

<script>
	import {i18n} from '@/utils/helpers';
	import {defineComponent,ref} from 'vue';

	export default defineComponent( {
		name: 'LocationChooser',
		setup(props, {emits}) {
			const place = ref({}),
				  locationChanged = (place) =>{
				place.value = place;
				emits('locationChanged', place);
			};

			return {
				ready: false, //Add ready:false to stop map from loading, and then when changed to true map will auto load
				// **GPS** : will trigger geolocation plugin , to find users location by GPS
				// **geolocation** : will try to find the place by lat, lng
				// **address**: will try to find the place by address query
				// **manually**: manually preset values

				// If GPS is selected as a fallbackProcedure and it fails , then address fallback is triggered and if address fails geolocation is triggered
				fallbackProcedure: 'gps', //gps | geolocation | address | manually
				zoom: 17, //Default Zoom
				geolocation: {
					// If GPS and Find by address fails then, map will be positioned by a default geolocation
					lat: 31.73858,
					lng: -35.98628,
					zoom: 2,
				},
				address: {
					query: '', //If GPS fails, Find by address is triggered
					zoom: 10,
				},
				place,
				locationChanged,

				i18n
			};
		},
	});
</script>