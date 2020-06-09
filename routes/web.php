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
Route::get('/',function (){
   return view('shop.home');
});
Route::prefix('login')->group(function () {
    Route::get('/', 'Auth\LoginController@showFormLogin')->name('formLogin');
    Route::post('/', 'Auth\LoginController@login')->name('login');
    Route::get('/register', 'Auth\RegisterController@showFormRegister')->name('formRegister');
    Route::get('/forgot-password', 'Auth\ForgotPasswordController@formForgotPassword')->name('formForgotPassword');
});


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
            Route::get('search', 'UserController@search')->name('users.search');

        });

        Route::prefix('product')->group(function (){
            Route::get('/','ProductController@index')->name('product.index');
            Route::get('/create','ProductController@create')->name('product.create');
            Route::post('/store','ProductController@store')->name('product.store');
            Route::get('{id}/edit','ProductController@edit')->name('product.edit');
            Route::post('{id}/update','ProductController@update')->name('product.update');
            Route::get('{id}/delete', 'ProductController@destroy')->name('product.delete');

        });
    });
});
