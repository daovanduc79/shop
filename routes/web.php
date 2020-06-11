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

Route::get('/','HomeController@index')->name('home.index');

Route::prefix('shop')->group(function () {
    Route::get('/','ShopController@index')->name('shop.index');

    Route::prefix('cart')->group(function () {
        Route::get('/','ShopController@showCart')->name('shop.showCart');
        Route::get('{productId}/add','ShopController@addToCart')->name('shop.addToCart');
        Route::get('{productId}/remove', 'ShopController@removeProductIntoCart')->name('shop.removeProductIntoCart');
        Route::get('show-checkout','ShopController@showCheckout')->name('shop.showCheckout');
        Route::post('checkout','ShopController@checkout')->name('shop.checkout');
    });


    Route::get('{id}/detail','ShopController@showShopDetail')->name('shop.detail');

});

Route::get('/register', 'Auth\RegisterController@showFormRegister')->name('formRegister');
Route::post('/register', 'Auth\RegisterController@registerActive')->name('registerActive');
Route::get('/register/verify/{code}', 'Auth\RegisterController@verify')->name('verify');

Route::prefix('login')->group(function () {
    Route::get('/', 'Auth\LoginController@showFormLogin')->name('formLogin');
    Route::post('/', 'Auth\LoginController@login')->name('login');
});
Route::prefix('login-shop')->group(function () {
    Route::get('/', 'Auth\Shop\LoginShopController@showFormLogin')->name('login-shop.form');
    Route::post('/', 'Auth\Shop\LoginShopController@login')->name('login-shop');
});

Route::get('/forgot-password', 'Auth\ForgotPasswordController@formForgotPassword')->name('formForgotPassword');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function (){ return view('admin.home');})->name('admin.home');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
        Route::prefix('users')->group(function () {
            Route::get('/', 'UserController@index')->name('users.index');
            Route::get('/create', 'UserController@create')->name('users.create');
            Route::post('/create', 'UserController@store')->name('users.store');
            Route::get('{id}/edit', 'UserController@edit')->name('users.edit');
            Route::post('{id}/edit', 'UserController@update')->name('users.update');
            Route::get('{id}/delete', 'UserController@delete')->name('users.delete');
        });
        Route::prefix('customers')->group(function () {
            Route::get('/', 'CustomerController@index')->name('customers.index');
            Route::get('{id}/edit', 'CustomerController@edit')->name('customers.edit');
            Route::post('{id}/edit', 'CustomerController@update')->name('customers.update');
            Route::get('{id}/delete', 'CustomerController@delete')->name('customers.delete');
        });

        Route::prefix('product')->group(function (){
            Route::get('/','ProductController@index')->name('product.index');
            Route::get('/create','ProductController@create')->name('product.create');
            Route::post('/store','ProductController@store')->name('product.store');
            Route::get('{id}/edit','ProductController@edit')->name('product.edit');
            Route::post('{id}/update','ProductController@update')->name('product.update');
            Route::get('{id}/delete', 'ProductController@destroy')->name('product.delete');
        });

        Route::prefix('pets')->group(function () {
            Route::get('/','PetController@index')->name('pets.index');
            Route::get('/create', 'PetController@create')->name('pets.create');
            Route::post('/create', 'PetController@store')->name('pets.store');
            Route::get('{id}/edit', 'PetController@edit')->name('pets.edit');
            Route::post('{id}/edit', 'PetController@update')->name('pets.update');
            Route::get('{id}/delete', 'PetController@delete')->name('pets.delete');
        });

        Route::prefix('categories')->group(function () {
            Route::get('/','CategoryController@index')->name('categories.index');
            Route::get('/create', 'CategoryController@create')->name('categories.create');
            Route::post('/create', 'CategoryController@store')->name('categories.store');
            Route::get('{id}/edit', 'CategoryController@edit')->name('categories.edit');
            Route::post('{id}/edit', 'CategoryController@update')->name('categories.update');
            Route::get('{id}/delete', 'CategoryController@delete')->name('categories.delete');
        });

        Route::get('search','SearchController@search')->name('search');
    });

});

Route::get('test', function () {
   return view('shop.test');
});
