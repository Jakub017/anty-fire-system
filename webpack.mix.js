let mix = require('laravel-mix');

mix.sass('resources/scss/style.scss', 'public/css/website/style.css');
// .browserSync({
//     proxy: 'fire.loc',
//     open: true,
//     files: [
//         'app/**/*.php',
//         'resources/views/**/*.php',
//         'public/js/**/*.js',
//         'public/css/**/*.css'
//     ],
// });
