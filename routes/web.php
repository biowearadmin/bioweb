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
    return view('welcome');
});

Route::group(['prefix' => 'reports'], function () {
   Route::get('craig', 'ReportsController@craig');
   Route::get('dean', 'ReportsController@dean');
   Route::get('latisha', 'ReportsController@latisha');
   Route::get('julia', 'ReportsController@julia');
   Route::get('david', 'ReportsController@david');

   Route::post('index', 'ReportsController@readECGFile');
});

Route::group(['prefix' => 'main'], function () {
   Route::get('index', 'MainController@index');
   // Route::post('index', 'ReportsController@readECGFile');
});