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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('', 'Dashboard@index');

    Route::resource('users', 'UsersController');
    Route::resource('products', 'ProductsController');
});

