<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/', 'Home\MainController@index')->name('home');
Route::group([
    'prefix' => 'home',
    'namespace' => 'Home'
], function () {
    Route::resource('/brand', 'BrandController');
    Route::get('/anons/{id}', 'AnonsController@show')->name('show.anons');
    Route::post('/anons/user/add', 'AnonsController@add');
    Route::put('/user/update/{id}', 'ProfileController@update')->name('update.profile');
    Route::get('/user/profile/order/', 'ProfileController@orders')->name('profile.orders');
    Route::get('/user/profile/anons/', 'ProfileController@anonses')->name('profile.anonses');
    Route::get('/user/profile/product/', 'ProfileController@products')->name('profile.product');
    Route::get('/user/profile/message/', 'ProfileController@messages')->name('profile.message');
    Route::get('/user/profile/report/', 'ProfileController@report')->name('profile.report');
    Route::get('/user/profile/{id}', 'ProfileController@index')->name('user.profile');



});
Route::group([
    'prefix' => 'product',
],
    function() {
        Route::resource('/', 'ProductController');
});




Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/user', 'UserController');
    Route::resource('/brand', 'BrandController');
});

Route::group([
    'prefix' => 'organizer',
//    'middleware' => ['role:admin',  'auth'],
//    'middleware' => ['auth'],
    'middleware' => ['role:organizer'],
    'namespace' => 'Org'
], function () {
    Route::get('/', 'OrganizerController@index');
    Route::get('/order/all', 'OrderStatusController@all');
    Route::get('/order/{id}', 'OrderStatusController@status');
    Route::resource('/anons', 'AnonsController');
    Route::get('/brand/add', 'BrandController@create')->name('org-brand.add');
    Route::post('/brand/store', 'BrandController@store')->name('org-brand.store');
    Route::get('/purchase/create', 'PurchaseController@create')->name('org-purchase.add');
    Route::get('/purchase/order/{id}', 'PurchaseController@order')->name('org-purchase.show-order');
    Route::get('/purchase/store', 'PurchaseController@store')->name('org-purchase.store');
    Route::get('/purchase', 'PurchaseController@index')->name('org-purchase.index');
    Route::get('/client', 'ClientController@index')->name('org-purchase.clients');


});
Route::group([
    'prefix' => 'organizer',
    'namespace' => 'Org'
], function () {
    Route::resource('/order', 'OrderController');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
