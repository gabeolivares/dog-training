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
    mix.sass([
        'main.scss',
        'navbar.scss',
        'about.scss',
        'contact.scss',
        'services.scss',
        'submit-review.scss',
        'review.scss'
      ])
      .scripts([
        'navbar.js',
        'contact.js',
        'gallery.js',
        'submit-review.js'
      ]);
});
