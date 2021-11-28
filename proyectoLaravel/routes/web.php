<?php

use App\Http\Controllers\IncidenciaController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

Auth::routes();
Route::get('/registrarUsuario', 'Auth\RegisterController@index')->name('registrar');
Route::post('/registrarUsuario', 'Auth\RegisterController@create')->name('registrarUsuario');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'UsuarioController@perfil')->name('perfil');
Route::get('/gestionAsignacion', 'AsignacionController@index')->name('asignacion');
Route::get('/gestionIncidencia', 'IncidenciaController@index')->name('incidencia');
Route::post('/asignarTecnico', 'IncidenciaController@asignarTecnico')->name('asignarTecnico');
Route::get('/procesos', 'IncidenciaController@procesos')->name('procesos');
Route::get('/crearIncidencia', 'IncidenciaController@crearIncidencia')->name('crearIncidencia');
Route::get('/gestionUsuario', 'UsuarioController@gestionUsuario')->name('usuario');
Route::get('/respuesta', 'RespuestaController@index')->name('respuesta');
Route::get('/ticket', 'TicketController@index')->name('ticket');
Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/destroy/{id}', [UsuarioController::class, 'destroy']);
Route::post('/crearIncidencia', 'IncidenciaController@crearIncidencia')->name('crearIncidencia');