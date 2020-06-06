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

Route::get('/','BloodController@index');
Route::post('/signup','BloodController@signup');
Route::get('/donorlist','BloodController@donorlist');
Route::get('/all_donorlist','BloodController@all_donorlist')->name('datasource.jsondata');