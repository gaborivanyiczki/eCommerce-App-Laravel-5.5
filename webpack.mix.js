const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([

    'resources/assets/css/libs/metisMenu.min.css',
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/timeline.css',
    'resources/assets/css/libs/startmin.css',
    'resources/assets/css/libs/morris.css',
    'resources/assets/css/libs/font-awesome.min.css',

], 'public/css/libs.css');

mix.scripts([

    'resources/assets/js/libs/jquery.min.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/metisMenu.min.js',
    'resources/assets/js/libs/raphael.min.js',
    'resources/assets/js/libs/morris.min.js',
    'resources/assets/js/libs/morris-data.js',
    'resources/assets/js/libs/startmin.js',

], 'public/js/libs.js');