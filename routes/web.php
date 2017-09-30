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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {

	/*	
	 	Editing routes -> Send string

	 		$nombre = 'José Urbina';
	 		return "Mi nombre es: $nombre";
	*/

    return view('welcome');
});

// tareas: route's name
// {nombre} -> parameter or {nombre?} => ? parameter optional

// Creating of route with optional parameter
Route::get('/tareas/{nombre?}',function($nombre = null)
{
	return "Bienvenido $nombre";
});

// Example of route that redirect another route
Route::Redirect('/hola','/');


// Getting a specific route
// 1st parameter : route name
// 2nd parameter : view
// 3th parameter : array of data

// Config:get() -> accedi a la propiedad name del proyecto : cambiar en env y en el archivo app
Route::View('/newRoute','vEjemplo',["Name" => Config::get('app.name')]);


// Al poner el namespace me ahorro de colocarlo en las rutas internas del group
Route::namespace('Backend')->group(function () {
	// Creando ruta basica para el controllador tasks : metodos creados por uno mismo
	Route::get('Tasks','TasksController@getIndex');
	Route::get('Tasks/create','TasksController@getCreate')->name('Tasks.create');
	Route::post('Tasks/store','TasksController@postStore')->name('Tasks.store');

    Route::resource('Users','UsersController');
});



