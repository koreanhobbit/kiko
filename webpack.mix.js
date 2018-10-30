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
//#################//
//####FRONT END####//
//#################//
mix.js('resources/assets/frontend/js/app.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/util.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/main.js', 'public/frontend/js')
	.js('resources/assets/frontend/js/accordion.js', 'public/frontend/js')
	.sass('resources/assets/frontend/sass/main.scss', 'public/frontend/css')
	.sass('resources/assets/frontend/sass/noscript.scss', 'public/frontend/css');

mix.copy('resources/assets/frontend/js/min', 'public/frontend/js')
	.copy('resources/assets/frontend/fonts', 'public/frontend/fonts')
	.copy('resources/assets/frontend/images', 'public/frontend/images');



//######################//
//####SHOP FRONT END####//
//######################//
// mix.js('resources/assets/shop_frontend/js/app.js', 'public/shop_frontend/js')
// 	.sass('resources/assets/shop_frontend/sass/app.scss', 'public/shop_frontend/css');

// mix.copy('resources/assets/shop_frontend/css', 'public/shop_frontend/css')
// 	.copy('resources/assets/shop_frontend/js/app', 'public/shop_frontend/js')
// 	.copy('resources/assets/shop_frontend/fonts', 'public/shop_frontend/fonts')
// 	.copy('resources/assets/shop_frontend/images', 'public/shop_frontend/images')
// 	.copy('resources/assets/shop_frontend/includes', 'public/shop_frontend/includes')
// 	.copy('resources/assets/shop_frontend/vendor', 'public/shop_frontend/vendor');



//#######################//
//####ADMIN FRONT END####//
//#######################//

mix.sass('resources/assets/admin_frontend/sass/app.scss', 'public/admin_frontend/css')
	.js('resources/assets/admin_frontend/js/app.js', 'public/admin_frontend/js');

mix.copy('resources/assets/admin_frontend/css', 'public/admin_frontend/css')
	.copy('resources/assets/admin_frontend/js/app', 'public/admin_frontend/js')
	.copy('resources/assets/admin_frontend/fonts', 'public/admin_frontend/fonts')
	.copy('resources/assets/admin_frontend/img', 'public/admin_frontend/img')
	.copy('resources/assets/admin_frontend/vendor', 'public/admin_frontend/vendor')
	.copy('resources/assets/admin_frontend/data', 'public/admin_frontend/data')
	.copy('resources/assets/admin_frontend/icons-reference', 'public/admin_frontend/icons-reference');	