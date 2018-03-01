let mix = require('laravel-mix');

var tailwindcss = require('tailwindcss');

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

mix.setPublicPath('output');

mix.postCss('resources/assets/css/main.css', 'output', [
    tailwindcss('tailwind-config.js')
]).version();

mix.js('resources/assets/js/app.js', 'output')
    .version();

