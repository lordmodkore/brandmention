let mix = require('laravel-mix');
var elixir = require('laravel-elixir');
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

mix.js('resources/assets/js/main.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

   
// mix.browserSync({
//     proxy: 'brandmention.com'
// });

// mix.scripts([
//     './bower_components/jquery/dist/jquery.js',
//     './bower_components/bootstrap/dist/js/bootstrap.js',
//      './bower_components/moment/moment.js',
//     './bower_components/perfect-scrollbar/js/perfect-scrollbar.js',
//     './resources/assets/js/apps/*.js',
//     './resources/assets/js/charts/*.js',
//     './resources/assets/js/forms/*.js',
//     './resources/assets/js/helpers/*.js',
//     './resources/assets/js/maps/*.js',
//     './resources/assets/js/tables/*.js',
//     './resources/assets/js/ui/*.js',
// ], 'public/js/vendor.js');
