const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/tailwind.css', 'public/css', [
        require('postcss-import'),
        tailwindcss('tailwind.config.js'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
