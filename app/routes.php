<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Asociar parametros de la ruta
Route::model('juego', 'Juego');

//Páginas
Route::get('/', 'JuegosController@index');
Route::get('/crear', 'JuegosController@crear');
Route::get('/editar/{juego}', 'JuegosController@editar');
Route::get('/borrar/{juego}', 'JuegosController@borrar');

//Gestionar envíos de formularios
Route::post('/crear', 'JuegosController@gestionaCreacion');
Route::post('/editar', 'JuegosController@gestionaEdicion');
Route::post('/borrar', 'JuegosController@gestionaBorrado');


