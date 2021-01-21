<?php

use Illuminate\Support\Facades\Route;

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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard',function(){

	return view ('layouts.dashboard');
});

Route::post('/show_users','UserAdmController@deleteUser');

Route::get('/show_users','UserAdmController@getUserslist');
Route::resource('useradm','UserAdmController');
Route::DELETE('/show_users','UserAdmController@deleteUser');

// patient routes


Route::get('/dashbord/addpatient',function(){
	return view ('dashbord.secretary.addpatient');
});

Route::resource('patients','PatientController');

Route::get('/show_patients','PatientController@index');


Route::get('/dashboard/show_infos','PatientController@index');


Route::post('/dashboard/show_infos','PatientController@showInfos');
Route::post('/show_infos','PatientController@showInfos');

Route::get('/{id}/edit','PatientController@edit');
Route::put('/{id}','PatientController@update');


