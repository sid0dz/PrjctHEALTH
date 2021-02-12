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


Route::get('/addpatient',function(){
	return view ('dashbord.secretary.addpatient');
});

Route::get('/lol',function(){
	return view ('layouts.rdv.success');
});

Route::resource('patients','PatientController');

Route::get('/show_patients','PatientController@index');

Route::post('/show_infos','PatientController@showInfos');
Route::get('/show_infos/{id}','PatientController@showInfosR');

Route::get('/{id}/edit','PatientController@edit');
Route::put('/{id}','PatientController@update');

Route::resource('rdvs','RdvController');


   // add a new route:
   Route::get('/newRDV/{id}','RdvController@newRDV');

   Route::get('/newRDV/{id}/{medid}','RdvController@newRDV2');
   Route::get('/newRDV/{id}/{medid}/{date}','RdvController@newRDV3');
   Route::get('/newRDV/{id}/{medid}/{date}/{heure}','RdvController@newRDV4');


   Route::get('/{id}/orientation','OrientationController@create')->name('orientation');
   Route::post('orientationStore','OrientationController@store')->name('orientationStore');
 

   Route::get('/newRDVm/{id}','RdvController@newRDVm2');
   Route::get('/newRDVm/{id}/{date}','RdvController@newRDVm3');
   Route::get('/newRDVm/{id}/{date}/{heure}','RdvController@newRDVm4');
  
   Route::get('/newOr','OrientationController@create');
   
   Route::get('/newPrescription','PrescController@new');
   Route::post('/newPrescription','PrescController@store');