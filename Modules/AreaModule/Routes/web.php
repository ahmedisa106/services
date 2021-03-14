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

    Route::get('governments/dataTable', 'GovernmentController@dataTable')->name('governments.dataTable');
    Route::post('governments/delete-all', 'GovernmentController@deleteAll')->name('governments.deleteAll');
    Route::resource('governments', 'GovernmentController');


    Route::get('zones/dataTable', 'ZoneController@dataTable')->name('zones.dataTable');
    Route::post('zones/delete-all', 'ZoneController@deleteAll')->name('zones.deleteAll');
    Route::resource('zones', 'ZoneController');
});
