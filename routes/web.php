<?php

use Illuminate\Support\Facades\Session;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function() {

	Route::get('escuela/pdf', 'EscuelaController@pdf');
	Route::get('carnet', 'HomeController@carnet');
	Route::get('clubs/pdf', 'ClubController@pdf');
	Route::get('escuela/excel', 'EscuelaController@excel');
	Route::get('consultas/excel/{clubname}', 'ConsultasController@excel');
	Route::get('users/ajaxsearch', 'UserController@ajaxsearch');
	Route::get('escuelas/ajaxsearch', 'EscuelaController@ajaxsearch');
	Route::get('consultas/search', 'ConsultasController@search');
	Route::get('escuela/{escuela_id}/payments', 'EscuelaController@pagos');
	Route::get('pagos/{escuela_id}/print', 'PagoController@print');
	Route::get('pagos/{pago_id}/print', 'PagoController@print');
	Route::get('escuela/{escuela_id}/assistance', 'EscuelaController@asistencias');
	Route::get('escuela/{escuela_id}/payments/create', 'PagoController@create');
	Route::get('escuela/{escuela_id}/asistent/create', 'AsistenciaController@create');
	Route::resource('user', 'UserController');
	Route::resource('clubs', 'ClubController');
	Route::resource('consultas', 'ConsultasController');
	Route::resource('deportistas', 'DeportistaController');
	Route::resource('escuela', 'EscuelaController');
	Route::resource('pagos', 'PagoController');
	Route::resource('asistencias', 'AsistenciaController');
});

Route::get('/home', 'HomeController@index')->name('home');
