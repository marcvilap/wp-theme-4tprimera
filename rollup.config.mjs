import typescript from '@rollup/plugin-typescript'
import terser from '@rollup/plugin-terser'
import { nodeResolve } from '@rollup/plugin-node-resolve';

export default {
	input: 'assets/scripts/source.ts',
	output: {
		file: 'assets/scripts/bundle.js',
		format: 'iife',
	},
	plugins: [
		typescript({
			compilerOptions: {
				lib: ['ESNext', 'DOM'],
				target: 'ES2017',
			}
		}),
		terser(),
		nodeResolve(),
	]
}
