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

		$nombres =[ ['nombre' => 'Nombre 1'],
		        	['nombre' => 'Nombre 2'],
		        	['nombre' => 'Nombre 3'],
					['nombre' => 'Nombre 4']
				];

Route::get('/', function () {
	$nombre = "Jorge" ; 
    return view('Home')->with('nombre' , $nombre);
})->name('Home');

Route::get('saludo/{nombre?}' , function($nombre = "Invitado"){
	return "Hola " . $nombre;
})->name('saludo');


Route::view('datos' , 'datos', compact('nombres'))->name('datos');