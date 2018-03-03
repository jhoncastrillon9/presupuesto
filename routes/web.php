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







//grupod e rutas que tendran el prefijo admin
Route::group(['prefix' => 'admin'], function() {

	//routa general para ingresar 
	Route::resource('usuarios', 'usuariosController');

	//ruta especial apra elimar mas facil para que llegue por GET
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'usuariosController@destroy',
		'as' => 'admin.usuarios.destroy'

	]);

    
});





