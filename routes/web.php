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
Route::get('/', 'AdminController@index');
Route::get('/incommings', 'AdminController@incommings');
Route::get('/incommings/exportExcel', 'AdminController@export_incommings_to_excel');
Route::get('/settings', 'AdminController@settings');
Route::post('/settings/update', 'AdminController@ajaxupdatesettings');
// free api 
Route::post('/reply', 'TwilioController@reply');

// create credientials
Route::get('/login', 'LoginController@index');
Route::post('/getcode', 'LoginController@get_verication_code');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout');