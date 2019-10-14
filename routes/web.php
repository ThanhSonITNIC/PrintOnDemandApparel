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
    return view('front.home.index');
});

Route::post('register', 'Front\Auth\RegisterController@register')->name('front.register');

// guest
Route::prefix('')->middleware(['access.levels'])->namespace('Front')->name('front.')->group(function(){
    Auth::routes();
    Route::post('login', 'Auth\LoginController@login')->name('login');
    
    Route::resource('products', 'ProductsController')->only(['index', 'show']);
});

// account
Route::prefix('')->namespace('Front')->name('front.')->group(function(){

    Route::prefix('')->middleware(['auth', 'access.levels:2'])->group(function(){
        Route::resource('cart', 'CartsController');
        Route::resource('orders', 'OrdersController');
    });
});

// admin
Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
    
    Auth::routes();

    Route::post('admin/login', 'Auth\LoginController@login')->name('login');

    Route::prefix('')->middleware(['auth', 'access.levels:1'])->group(function(){
        Route::get('', 'Dashboard@index');

        Route::resource('users', 'UsersController');
        Route::resource('products', 'ProductsController');
        Route::resource('orders', 'OrdersController');
        Route::resource('posts', 'PostsController');
        Route::resource('order-products', 'OrderProductsController');
    });

});

