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

Route::group([
    'prefix' => 'home',
    'namespace' => 'Home'
], function () {
    Route::get('/', 'MainController@index')->name('home');
    Route::resource('/brand', 'BrandController');
    Route::get('/anons/{id}', 'AnonsController@show')->name('show.anons');
    Route::post('/anons/user/add', 'AnonsController@add');
    Route::get('/user/profile/{id}', 'ProfileController@index')->name('user.profile');
    Route::put('/user/update/{id}', 'ProfileController@update')->name('update.profile');



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
//    Route::get('/anons/all', 'AnonsController@index');
    Route::resource('/anons', 'AnonsController');
    Route::resource('/order', 'OrderController');


});

Auth::routes();

//Route::get('/home', 'HomeController@index');
