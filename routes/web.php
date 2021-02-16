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


Route::get('/', function () {
	$nombre = "Jorge" ; 
    return view('Home')->with('nombre' , $nombre);
})->name('Home');

Route::get('saludo/{nombre?}' , function($nombre = "Invitado"){
	return "Hola " . $nombre;
})->name('saludo');



Route::get('/datos' , 'DatosController')->name('datos');

Route::get('/portfolio' , 'PortfolioController@index')->name('portfolio');

Route::resource('proyects' , 'PortfolioController');