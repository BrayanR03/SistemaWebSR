<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('auth.login');
});
//Route::view('/','home');
Route::get('areas','App\Http\Controllers\AreaController@index')->name('areas.index');

//Route::post('login','App\Http\Controllers\Auth\LoginController@valida')->name('login.val');

Route::get('apoderado/{apoderado}/editar','App\Http\Controllers\ApoderadoController@edit')->name('apoderado.edit');
Route::patch('apoderado/{apoderado}','App\Http\Controllers\ApoderadoController@update')->name('apoderado.update');

Route::get('alumno/{alumno}/editar','App\Http\Controllers\AlumnoController@edit')->name('alumno.edit');
Route::patch('alumno/{alumno}','App\Http\Controllers\AlumnoController@update')->name('alumno.update');




Route::get('areas/{AreaID}','App\Http\Controllers\AreaController@show')->name('areas.show');
Route::get('alumno','App\Http\Controllers\AlumnoController@index')->name('alumno.index');
Route::get('alumno/{AlumnoID}','App\Http\Controllers\AlumnoController@show')->name('alumno.show');
Route::get('apoderado','App\Http\Controllers\ApoderadoController@index')->name('apoderado.index');
Route::get('apoderado/{ApoderadoID}','App\Http\Controllers\ApoderadoController@show')->name('apoderado.show');

Route::get('asistencias','App\Http\Controllers\AsistenciaController@index')->name('asistencias.index');
Route::get('asistenciasareas/{AreaID}','App\Http\Controllers\AsistenciaController@indexarea')->name('asistenciasareas.index');
// En tu archivo de rutas web.php
Route::get('resultados', 'App\Http\Controllers\AsistenciaController@getReporteAsistencias');


Route::get('boletanotas/{alumnaID}','App\Http\Controllers\DetalleAreaController@index')->name('boletanotas.index');

Route::view('horario','horario')->name('horario');

Auth::routes(['register'=>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
