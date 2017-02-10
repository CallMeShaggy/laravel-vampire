var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var masonryPath = 'node_modules/masonry-layout/dist';
    var jqueryPath = 'node_modules/jquery/dist';
    var imagesLoadedPath = 'node_modules/imagesloaded/imagesloaded.pkgd.min.js';
    var fontAwesomePath = 'node_modules/font-awesome';
    var jqueryEasingPath = 'node_modules/jquery-easing/dist'
    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(jqueryPath + '/jquery.min.js', 'public/js')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
        .copy(masonryPath + '/masonry.pkgd.min.js', 'public/js')
        .copy(imagesLoadedPath, 'public/js')
        .copy(fontAwesomePath + '/fonts', 'public/font-awesome/fonts')
        .copy(fontAwesomePath + '/css/font-awesome.min.css', 'public/css')
        .copy(jqueryEasingPath + '/jquery.easing.1.3.umd.min.js', 'public/js');

    mix.copy('resources/images', 'public/images')
        .version('public/images');
});


elixir(function(mix) {
    mix.scripts([
        'masonry.js'
    ]);
});