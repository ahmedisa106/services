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

Route::group(['prefix' => 'admin-panel', 'middleware' => 'admin:admin'], function () {


    Route::resource('categories', 'CategoriesController')->except('show');
    Route::get('categories/dataTable', 'CategoriesController@dataTable')->name('categories.dataTable');
    Route::post('categories/delete-all', 'CategoriesController@deleteAll')->name('categories.deleteAll');
});
