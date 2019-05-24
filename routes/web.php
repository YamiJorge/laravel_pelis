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

/*Estas son las rutas, las que redirigirán a los controladores.
La sintaxis es:

Route::get('nombre_controlador', 'Controlador@funcion_controlador')

*/

/*
Route::get('controlador', 'PruebaController@index');
Route::get('nombre2/{nombre}', 'PruebaController@nombre');
*/

/*Este es un Controlador Resource, el cual crea las funciones CRUD en una
linea de código. Para crearlo, se usa el siguiente comando:

php artisan make:controller NombreControlador --resource

Este comando crea las funciones CRUD y las deja en la carpeta Controllers.
*/

//Route::resource('movie', 'MovieController');

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('prueba', function () {
    return ('Holi desde Routes');
});*/


/*Acá el {nombre} es un parámetro que se recibe. Las variables se 
declaran antecediendo un $ y luego poniendo el nombre del parámetro*/

/*
Route::get('nombre/{nombre}', function ($nombre) {
    return ('Mi nombre es: ').$nombre;
});

Route::get('edad/{edad}', function ($edad) {
    return ('Mi edad es: ').$edad;
});*/


Route::get('/','ControladorFront@index');
Route::get('contacto','ControladorFront@contacto');
Route::get('reviews','ControladorFront@reviews');
Route::get('admin','ControladorFront@admin');

Route::resource('usuario','UsuarioControlador');

Route::resource('genero','GeneroControlador');

Route::resource('pelicula','PeliControlador');

Route::resource('mail','MailControlador');

Route::resource('log','LoginControlador');

Route::get('logout','LoginControlador@logout');

Route::get('/', 'ControladorFront@index')->name('inicio');

Route::get('generos','GeneroControlador@listing');