let mix = require('laravel-mix');


mix.options({
    processCssUrls: false
});

mix.js('js/app.js', 'js/app.js').sass('scss/styles.scss', 'style.css').setPublicPath('../');
