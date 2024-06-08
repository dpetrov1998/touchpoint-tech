import { defineConfig } from 'vite';
import externalGlobals from 'rollup-plugin-external-globals';

const BASE = '/';

export default defineConfig({
	base: BASE,
	build: {
		assetsDir: '.',
		outDir: `dist`,
		emptyOutDir: true,
		rollupOptions: {
			input: [
			'resources/js/main.js',
			'resources/scss/theme.scss',
			],
			output: {
				entryFileNames: 'main.js',
				assetFileNames: 'theme.[ext]',
			},
		},
	},
	server: {
		watch: {
			usePolling: true,
			interval: 100,
		},
	},
	plugins: [
		externalGlobals({
			jquery: 'jQuery',
		}),
	]
});
