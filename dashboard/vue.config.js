/* eslint-disable @typescript-eslint/no-var-requires */
const package = require('./package.json');

const configs = {
	css: {
		loaderOptions: {
			less: {
				javascriptEnabled: true,
			},
		},
	},
	transpileDependencies: ['oweb', 'oweb-tel-input', 'gobl-utils-ts'],
	chainWebpack: (config) => {
		config.plugin('define').tap((args) => {
			const oc = {
				API: 'https://api.luthorr.com',
				API_DEV: 'http://api.luthorr.com',
				API_KEY: 'C055DB5D-7EF6DB26-48A5043E-D10BD9D0',
				API_KEY_DEV: 'C055DB5D-7EF6DB26-48A5043E-D10BD9D0',
				...(package['oweb'] || {}),
			};

			args[0]['process.env']['NAME'] = JSON.stringify(package.name);
			args[0]['process.env']['VERSION'] = JSON.stringify(package.version);
			args[0]['process.env']['API'] = JSON.stringify(oc.API);
			args[0]['process.env']['API_DEV'] = JSON.stringify(oc.API_DEV);
			args[0]['process.env']['API_KEY'] = JSON.stringify(oc.API_KEY);
			args[0]['process.env']['API_KEY_DEV'] = JSON.stringify(
				oc.API_KEY_DEV,
			);

			return args;
		});
	},
};

if (process.env.NODE_ENV === 'production') {
	configs.publicPath = '/';
} else {
	configs.publicPath = '/';
}

module.exports = configs;
