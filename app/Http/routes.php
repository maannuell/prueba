<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio','principalController@index');*/
Route::get('/ejemplo','ejemploController@index');
Route::get('/inicio', 'ejemploController@inicio');
//muestra formulario de registro de usuarios
Route::get('/registroUsuarios', 'ejemploController@registroUsuarios');
Route::post('/guardarUsuario','usuariosController@guardar');
Route::get('/consultarUsuarios','usuariosController@consultar');
Route::get('/eliminarUsuario/{id}','usuariosController@eliminar');
Route::get('/editarUsuario/{id}','usuariosController@editar');
Route::post('/actualizarUsuario/{id}','usuariosController@actualizar');
Route::get('/generarpdfUsuarios','usuariosController@generarpdfusuarios');
//proyectos
Route::get('/registroProyectos','proyectosController@registro');
Route::post('/guardarProyecto','proyectosController@guardar');
Route::get('/consultarProyectos','proyectosController@consultar');
Route::get('/eliminarProyecto/{id}','proyectosController@eliminar');
Route::get('/editarProyecto/{id}','proyectosController@editar');
Route::post('/actualizarProyecto/{id}','proyectosController@actualizar');
Route::get('/generarpdfProyectos','proyectosController@generar');
Route::get('/asignarUsuario/{idp}','proyectosController@asignarUsuario');

//rutas trabajo
Route::get('/trabajo','ejemploController@trabajo');