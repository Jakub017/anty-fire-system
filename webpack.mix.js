let mix = require('laravel-mix');

mix.sass('resources/scss/style.scss', 'public/css/website/style.css')
    .browserSync({
        proxy: '127.0.0.1:8000',
        open: true, // W razie potrzeby, możesz wyłączyć automatyczne otwieranie przeglądarki
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ],
    });
