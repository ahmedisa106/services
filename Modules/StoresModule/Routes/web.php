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

Route::group(['prefix' => 'admin-panel', 'middleware' => 'admin:admin'], function () {

    /*categories*/
    Route::resource('categories', 'CategoriesController')->except('show');
    Route::get('categories/dataTable', 'CategoriesController@dataTable')->name('categories.dataTable');
    Route::post('categories/delete-all', 'CategoriesController@deleteAll')->name('categories.deleteAll');
    /*end categories*/

    /*stores*/
    Route::post('stores/uploadAlbum', 'StoresController@uploadAlbum')->name('stores.uploadAlbum');
    Route::post('stores/removeAlbumPhoto', 'StoresController@removeAlbumPhoto')->name('stores.removeAlbumPhoto');
    Route::get('stores/dataTable', 'StoresController@dataTable')->name('stores.dataTable');
    Route::post('stores/delete-all', 'StoresController@deleteAll')->name('stores.deleteAll');
    Route::get('stores/getZone', 'StoresController@getZone')->name('stores.getZone');
    Route::resource('stores', 'StoresController')->except('show');
    /*end stores*/


});
