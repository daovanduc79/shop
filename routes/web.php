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

Route::get('/login', 'Auth\LoginController@showFormLogin')->name('formLogin');
Route::post('/login', 'Auth\LoginController@login')->name('login');

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
    });
});
