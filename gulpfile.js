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
    var masonryPath = 'node_modules/masonry-layout/dist/';
    var jqueryPath = 'node_modules/jquery/dist/';
    var imagesLoadedPath = 'node_modules/imagesLoaded/imagesloaded.pkgd.min.js';
    mix.sass('app.scss')
        .copy(bootstrapPath + '/fonts', 'public/fonts')
        .copy(jqueryPath + 'jquery.min.js', 'public/js')
        .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
        .copy(masonryPath + '/masonry.pkgd.min.js', 'public/js')
        .copy(imagesLoadedPath, 'public/js');
});

elixir(function(mix) {
    mix.scripts([
        'masonry.js'
    ]);
});