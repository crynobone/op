var dir, elixir = require('laravel-elixir');

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

dir = {
  asset: {
    css: 'public/css',
    img: 'public/img',
    js: 'public/js',
    font: 'public/fonts'
  },
  resources: 'resources/assets',
  vendor: 'vendor/bower_components'
};

elixir(function (mix) {
  mix.sass('app.scss', dir.resources+'/css', {
    includePaths: [dir.vendor+'/']
  });

  mix.copy(dir.vendor+'/jquery/dist/jquery.min.js', dir.resources+'/js/vendor/jquery.min.js')
    .copy(dir.vendor+'/javie/dist/javie.min.js', dir.resources+'/js/vendor/javie.min.js')
    .copy(dir.vendor+'/vue/dist/vue.min.js', dir.resources+'/js/vendor/vue.min.js')
    .copy(dir.vendor+'/font-awesome/fonts', dir.asset.font)

  mix.styles([
    'app.css'
  ]);
});
