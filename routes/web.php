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

    'namespace' => 'Home'
], function () {
    Route::get('/', 'MainController@index')->name('home');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin'],
    'namespace' => 'Admin'
], function () {
    Route::get('/', 'AdminController@index');
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
});

Route::group([
    'prefix' => 'organizer',
    'middleware' => ['role:admin', 'role:organizer', 'auth'],
    'namespace' => 'Org'
], function () {
    Route::get('/', 'OrganizerController@index');
//    Route::resource('category', 'CategoryController');
//    Route::resource('user', 'UserController');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
