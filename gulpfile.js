const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
		.copy('resources/assets/img', 'public/img')
		.copy('resources/assets/js/jquery.backstretch.min.js', 'public/js/jquery.backstretch.min.js')
		.copy('node_modules/font-awesome/fonts', 'public/fonts')
		//.browserSync({proxy: 'laracon.dev'})
		.scripts('resources/assets/js/fileserve.js', 'public/js/fileserve.js')
		.webpack('app.js');
});