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

Route::get('/', 'HomeController@index');
Route::get('/testindikator', 'HomeController@getIndicator');
Route::get('/testsensor', 'HomeController@getSensorData');
Route::get('/settings', 'SettingsController@index');
Route::post('/ubahtanaman', 'SettingsController@ubahTanaman');
Route::get('/login', function () {
	return view('login');
});
Route::post('/login/auth_user', 'userAuth@loginPost');
