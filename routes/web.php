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

Route::get('/', 'Web\WebController@index');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {
Route::get('dashboard', 'Admin\DashboardController@index'); 
Route::resource('biodata', 'Admin\BiodataController');
Route::resource('tempat', 'Admin\TempatController');
Route::resource('pesan_tempat', 'Admin\PesanTempatController');


Route::get('print/{id}', 'Admin\PesanTempatController@print');

});
