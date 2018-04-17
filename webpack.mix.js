let mix = require('laravel-mix');

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
mix.sass('./resources/assets/sass/pages/all.scss',
    'public/sass/all.css')
    .sass('./node_modules/toastr/toastr.scss',
        'public/sass/toastr.css')
    .sourceMaps()
    .version();

mix.styles([
    './node_modules/bootstrap/dist/css/bootstrap.css',
    './node_modules/font-awesome/css/font-awesome.css',
    './node_modules/jquery-ui-dist/jquery-ui.css',
    './node_modules/jquery-ui-dist/jquery-ui.structure.css',
    './node_modules/jquery-ui-dist/jquery-ui.theme.css',
    './node_modules/sweetalert/dist/sweetalert.css',
    './node_modules/sweetalert/themes/facebook/facebook.css',
    './node_modules/toastr/build/toastr.css',
    './node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
    './node_modules/sweetalert2/dist/sweetalert2.css',
    './node_modules/toastr/build/toastr.css',
    './node_modules/ekko-lightbox/dist/ekko-lightbox.css',

    './node_modules/animate.css/animate.css',

    './node_modules/owl.carousel2/dist/assets/owl.carousel.min.css',
    './node_modules/owl.carousel2/dist/assets/owl.theme.default.min.css',
    './node_modules/owl.carousel2/dist/assets/owl.theme.green.min.css',

    './node_modules/fullcalendar/dist/fullcalendar.min.css',

    './resources/assets/fonts/rouble.css',
    './resources/assets/css/*/*/*.css',
    './resources/assets/css/*/*.css',
    './resources/assets/css/*.css',
    './public/sass/*.css'
], 'public/css/all.css')
    .styles(
        [
            './resources/assets/fonts/rouble.css',
            './resources/assets/css/*/*/*.css',
            './resources/assets/css/*/*.css',
            './resources/assets/css/*.css',
            './public/sass/all.css'
        ], 'public/css/style.css')
    .sourceMaps()
    .version();
//
mix.copy('./node_modules/font-awesome/fonts', 'public/fonts');
mix.copy('./node_modules/jquery-ui-dist/images', 'public/css/images');
mix.copy('./resources/assets/fonts/fonts', 'public/css/fonts');


mix.scripts([
    './resources/assets/landing/scripts.js'
], 'public/js/scripts.js')
    .scripts([
        './node_modules/jquery/dist/jquery.js',
        './node_modules/popper.js/dist/umd/popper.js',
        './node_modules/bootstrap/dist/js/bootstrap.js',
        './node_modules/jquery-ui-dist/jquery-ui.js',

        './node_modules/sweetalert/dist/sweetalert-dev.js',
        './node_modules/toastr/build/toastr.min.js',
        './node_modules/font-awesome/js/font-awesome.js',
        './node_modules/typeahead/dist/typeahead.jquery.js',
        './node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
        './node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.ru.min.js',
        './node_modules/sweetalert2/dist/sweetalert2.js',
        './node_modules/toastr/build/toastr.min.js',
        './node_modules/jquery-masked-input/dist/jquery.masked-input.js',
        './node_modules/ekko-lightbox/dist/ekko-lightbox.js',

        './node_modules/toastr/toastr.js',

        './node_modules/owl.carousel2/dist/owl.carousel.min.js',
        './node_modules/moment/min/moment-with-locales.min.js',
        './node_modules/isotope-layout/dist/isotope.pkgd.min.js',

        './node_modules/fullcalendar/dist/fullcalendar.min.js',

        './resources/libs/JavaScript-Load-Image-master/js/load-image.all.min.js',

        './resources/assets/js/*/*/*.js',
        './resources/assets/js/*/*.js',
        './resources/assets/js/*.js'
    ], 'public/js/all.js')
    .version();

mix.browserSync({
    proxy:  // проксирование вашего удаленного сервера, не важно на чем back-end
        {
            target: "91.226.81.219",
            ws: true
        },
    logPrefix: '91.226.81.219', // префикс для лога bs, маловажная настройка
    host: '91.226.81.219', // можно использовать ip сервера
    port: 3000, // порт через который будет проксироваться сервер
    // open: 'external', // указываем, что наш url внешний
    notify: true,
    ghost: true,
    // httpModule: 'http2',
    // https: {
    //     key: "./ssl/privkey.pem",
    //     cert: "./ssl/fullchain.pem",
    // },
});