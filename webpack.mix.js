let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.scripts([
 	'resources/assets/js/lodash/lodash.js',
 	'resources/assets/js/toastr.js',
 	'resources/assets/js/vue.js',
 	'resources/assets/js/axios.js',
 	//'resources/assets/js/Guardias/EmpleadoGuardia.js',
], 'public/js/Guardias/EmpleadoGuardia.js');
