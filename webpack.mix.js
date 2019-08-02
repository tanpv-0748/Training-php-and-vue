const mix = require('laravel-mix');
const config = require('./webpack.config');

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

mix.sourceMaps()
  .js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/user.scss', 'public/css')
  .sass('resources/sass/announcements.scss', 'public/css')
  .copy('resources/js/user.js', 'public/js')
  .copy('resources/images/avatar_default.png', 'public/images')
  .webpackConfig(config);
