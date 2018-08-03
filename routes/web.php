<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//#################################//
//######## Route FrontEND #########//
//#################################//

Route::group(['prefix' => LaravelLocalization::setLocale()], function() 
{
	//send message
	//
	Route::post('/contactmessage', 'ContactMessageController@store')->name('contactmessage.store');

	Route::get('/', 'MainPageController@index')->name('mainpage.index');

});




//#################################//
//######## Route For SHOP #########//
//#################################//

Route::group(['prefix' => 'shop'], function() {


	//shop contact page index
	Route::get('/contact', 'ShopContactPageController@index')->name('shop.contact.index');

	//shop shop about page index
	Route::get('/about', 'ShopAboutPageController@index')->name('shop.about.index');

	//shop shopproduct detail page index
	Route::get('/detail', 'ShopProductDetailPageController@index')->name('shop.productdetail.index');

	//shop shoppage index
	Route::get('/shop', 'ShopShopPageController@index')->name('shop.shop.index');

	//shop mainpage index
	Route::get('/', 'ShopMainPageController@index')->name('shop.mainpage.index');
});



//##################################//
//######## Route For ADMIN #########//
//##################################//

Route::group(['prefix' => 'kkmanage'], function() {

	//dashboard route
	Route::group(['middleware' => ['role:super-admin|admin', 'auth']], function() 
	{


		//############################//
		//media
		//############################//
		
		//store
		//list
		Route::post('media', 'AdminMediaController@store')->name('admin.media.store');
		
		//list
		Route::get('media', 'AdminMediaController@index')->name('admin.media.index');

		//############################//
		//product
		//############################//
		
		//deleteImage
		Route::post('product/deleteImage/{id}', 'AdminProductController@deleteImage')->name('admin.product.deleteImage');

		//uploadImage
		Route::post('product/uploadImage/{id}', 'AdminProductController@uploadImage')->name('admin.product.uploadImage');

		//edit
		Route::get('product/edit/{id}', 'AdminProductController@edit')->name('admin.product.edit');

		//update
		Route::put('product/{id}', 'AdminProductController@update')->name('admin.product.update');

		//create
		Route::get('product/create', 'AdminProductController@create')->name('admin.product.create');
		
		//list
		Route::get('product', 'AdminProductController@index')->name('admin.product.index');

		//############################//
		//dashboard
		//############################//
		Route::get('/', 'AdminDashboardController@index')->name('admin.dashboard.index');
	});
});




//#################################//
//######## Route For Auth #########//
//#################################//
Route::post('/login', 'Auth\LoginController@login')->name('login.attempt');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/register', 'Auth\RegisterController@register')->name('register.attempt');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser')->name('user.verify');