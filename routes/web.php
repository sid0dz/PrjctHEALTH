<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/ajax', function () {
    return view('ajax');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index.html', function () {
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
   Route::get('/newRDV/{id}/{medid}/{date}/{heure}/{motif}','RdvController@newRDV4');

   // orientation controllers
   Route::get('/{id}/orientation','OrientationController@create')->name('orientation');
   Route::post('orientationStore','OrientationController@store')->name('orientationStore');
   Route::get('/{id}/editorientation','OrientationController@edit')->name('editorientation');
   Route::put('/{id}/up','OrientationController@update')->name('orientationupdate');
   Route::delete('/{id}/destroy','OrientationController@destroy')->name('orientationdestroy');
 

   Route::get('/newRDVm/{id}','RdvController@newRDVm2');
   Route::get('/newRDVm/{id}/{date}','RdvController@newRDVm3');
   Route::get('/newRDVm/{id}/{date}/{heure}','RdvController@newRDVm4');
  
   Route::get('/newOr','OrientationController@create');
   
   Route::get('/newPrescription','PrescController@new');
   Route::post('/newPrescription','PrescController@store');

   Route::get('/set/maladie/{patid}/{medid}/{info}','MedinfoController@newMaladie');
   Route::get('/set/allergie/{patid}/{medid}/{info}','MedinfoController@newAllergie');
   Route::get('/set/commentaire/{patid}/{medid}/{info}','MedinfoController@newCommentaire');
   Route::post('/set/imagerie','MedinfoController@newImg');

    Route::get('/unset/orientation/{id}','MedinfoController@delOrientation');


   //Route::get('/set/maladie/{id}/{maladie}','MedinfoController@newImagerie');
   Route::get('/deleteRdv/{id}','RdvController@deleterdv');
   Route::get('/tabledata/{id}/{medid}/{date}','RdvController@showTable')->name('table.show');
   Route::get('/tabledata/{id}/{medid}/{date}/{heure}','RdvController@newRDV4')->name('table.assign');;
   
   Route::get('/ajax/getInf/{op}/{id}','PatientController@getMal');
   Route::get('/ajax/getImg/{id}','PatientController@getImg');
   
   Route::post('/ajax',function(Request $request){ 
       return "success";
   });
   Route::get('/newUser',function(){ return view('layouts.Admin.newUser');});

   Route::post('/newUser','UserAdmController@addUser');
   Route::get('/admconfig',function(){  return view('layouts.Admin.configsite');});
   
Route::post('/admconfig','UserAdmController@siteconf');
Route::get('/upload','UploadFileController@index');
Route::post('/upload','UploadFileController@showUploadFile');
Route::get('/profil',function(){
return view('layouts.profil');
});
Route::get('/rdv/{date?}/{heure?}/{departement?}/{medecin?}/{name?}/{birthday?}/{phone?}/{email?}/{dejap?}/{motif?}','RdvController@req');
Route::post('/rdvp','RdvController@req2');
Route::post('/profil','UserAdmController@profilupd');