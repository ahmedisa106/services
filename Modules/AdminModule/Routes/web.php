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


Route::group(['prefix' => 'admin-panel', 'middleware' => ['admin:admin']], function () {

    Route::get('/', 'AdminModuleController@dashboard')->name('admin.dashboard');
    Route::get('/logout', 'AuthController@logout')->name('admin.logout');

});

Route::group(['prefix' => 'admin-panel', 'middleware' => ['guest:admin']], function () {

    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');

});

