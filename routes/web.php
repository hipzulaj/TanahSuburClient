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

//Route Home
Route::get('/', 'HomeController@Index');
Route::get('/detailsensor/{nama_alat}/{nama_tanaman}', 'HomeController@DetailSensor');
Route::get('/testindikator', 'HomeController@getIndicator');
Route::get('/testsensor', 'HomeController@getSensorData');

//Route Settings
Route::get('/settings', function(){
	return view('Settings/settings');
});
//Setting Pilihan Tanaman
Route::get('/settings/listtanaman','SettingsController@DaftarTanaman');
Route::get('/settings/tanaman/ubahtanaman', 'SettingsController@IndexUbahTanaman');
Route::post('settings/tanaman/ubahtanaman/submit', 'SettingsController@UbahTanaman');
Route::post('/settings/tanaman/tambahtanaman/submit', 'SettingsController@TambahTanaman');
Route::get('/settings/tanaman/tambahtanaman',function () {
	return view('Settings/tambahtanaman');
});
Route::post('settings/tanaman/tambahtanaman/submit','SettingsController@TambahTanaman');
Route::get('/settings/tanaman/edittanaman/{id}', 'SettingsController@EditTanamanPage');
Route::post('/settings/tanaman/edittanaman/submit/{id}', 'SettingsController@EditTanaman');
Route::get('settings/tanaman/hapustanaman/{id}', 'SettingsController@HapusTanaman');

//Setting Sensor
Route::get('/settings/listsensor', 'SettingsController@DaftarSensor');
Route::get('/settings/atursensor/tambahsensor', 'SettingsController@TambahSensorView');
Route::post('settings/atursensor/tambahsensor/submit','SettingsController@TambahSensor');
Route::get('settings/atursensor/editsensor/{id}','SettingsController@EditSensorPage');
Route::post('settings/atursensor/editsensor/submit/{id}','SettingsController@EditSensor');
Route::get('settings/atursensor/hapussensor/{id}', 'SettingsController@HapusSensor');

//User Management
Route::get('settings/usermanagement/listuser', 'SettingsController@ShowUsers');
Route::get('settings/usermanagement/removeuser/{id}', 'SettingsController@RemoveUser');
Route::get('settings/usermanagement/makeadmin/{id}', 'SettingsController@MakeAdmin');
Route::get('settings/usermanagement/removeadmin/{id}', 'SettingsController@RemoveAdmin');


//Route Auth User
Route::get('/login', function () {
	return view('login');
});
Route::post('/login/auth_user', 'userAuth@loginPost');
Route::get('/logout', 'userAuth@logoutUser');
