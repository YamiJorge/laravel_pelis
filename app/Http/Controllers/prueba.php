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

Route::get('controlador', 'PruebaController@index');


Route::get('prueba', function () {
	return "holi";
});

Route::get('nombre/{nombre}', function ($nombre) {
	return "Mi nombre es:".$nombre;
});


Route::get('edad/{edad}', function ($edad) {
	return "Mi edad es:".$edad;
});


Route::get('edad2/{edad?}', function ($edad=20) {
	return "Mi edad es:".$edad;
});


Route::get('/', function () {
    return view('welcome');
});
