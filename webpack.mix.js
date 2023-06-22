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

mix.js('resources/js/app.js', 'public/js')
    .vue(
        {
            version: 2,
            extractStyles: '/resources/js/assets/styles/main.min.css'
        }
    )
    .version()
    .minify('public/js/app.js')
    .copy('resources/js/assets/img', 'public/img')
    .copy('resources/js/assets/js', 'public/js')
    // .copy('resources/js/assets/js', 'public/js')

    .options({
        processCssUrls: false,
        autoprefixer: false
    })
    .postCss('resources/js/assets/styles/main.min.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css',[require('tailwindcss')])
    // .postCss('resources/js/assets/styles/tailwind.css', 'public/css')

;
// .sass('resources/js/assets/app.scss', 'public/css');
