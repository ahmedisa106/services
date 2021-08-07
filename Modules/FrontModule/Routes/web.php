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

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '', 'middleware' => 'web'], function () {

    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/categories', 'FrontController@categories')->name('front.categories');
    Route::get('/categories/{id}/show', 'FrontController@show_category')->name('front.getCategory');
    Route::get('/stores/{id}/show', 'FrontController@show_store')->name('front.getStore');

    Route::get('/stores/add-new', 'FrontController@addStore')->name('front.addStore')->middleware('auth');

    Route::get('/search', 'FrontController@search')->name('front.search');
});

