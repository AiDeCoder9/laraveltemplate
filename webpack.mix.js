const mix = require('laravel-mix');

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

mix.styles(
    ['node_modules/bootstrap/dist/css/bootstrap.css', 'node_modules/@fortawesome/fontawesome-free/css/all.css'
    ],
    'public/css/app.css'
)

mix.scripts(
    ['node_modules/jquery/dist/jquery.slim.js',

        'node_modules/bootstrap/dist/js/bootstrap.js'],
    'public/js/app.js'
);




