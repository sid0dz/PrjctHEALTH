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
Route::get('/show_users',function(){

	return view ('layouts.admin.show_users');

});

// patient routes

Route::get('/dashbord/addpatient',function(){
	
	return view ('dashbord.secretary.addpatient');
});

Route::resource('patients','PatientController');
Route::get('/dashbord/show_patients','PatientController@index');
/*Route::get('/dashbord/show_patients',function(){
	
	return view ('dashbord.secretary.patients');
});*/

