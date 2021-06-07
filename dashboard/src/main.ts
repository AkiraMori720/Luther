import App from './App.vue';
import './registerServiceWorker';
import '@/oweb.boot';
import { createApp, Component, Directive } from 'vue';
import directives from './utils/directives';
import components from '@/components/';
import { forEach } from 'oweb';

const vm = createApp(App);

/*
vm.use(VueGeolocation);
vm.use(GMaps, {
	load: {
		apiKey: 'AIzaSyCX7NpOaD4UUfHMC-modULxGFSgomS3MGc',
		libraries: ['places'],
	},
});
*/

if (process.env.NODE_ENV === 'production') {
	vm.config.errorHandler = function(...args) {
		// this helps debug vue errors in production
		(window as any).__owebVueError = args;
	};
}

forEach(components, (component: Component, name: string) =>
	vm.component(name, component),
);
forEach(directives, (directive: Directive, name: string) =>
	vm.directive(name, directive),
);

vm.mount('#app');
