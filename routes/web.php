<?php

use Illuminate\Support\Facades\Route;

//invocar el controlador desde su ruta
use App\Http\Controllers\cursoController;
use App\Http\Controllers\miprimerController;
use  App\Http\Controllers\heladosController;
use App\Http\Controllers\ControladorPrecios;


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
Route::get('/minombre', function () {
    return 'kevin';
});

Route::get('/minombre/{nombre}', function ($nombre) {
    return 'Hola soy' . $nombre;
});



Route::get('micontroller/{a}/{b}',[miprimerController::class, 'suma'] );

Route::get('arroz/{trigo}',[miprimerController::class, 'carrera'] );

/*La clase va igual que el metodo entre corchetes
La clase va acompañada de ::class, y el metodo tiene que
llarmarse igual o como esta en la clase y entre comillas simples
*/
Route::get('heladeria/{opcion}',[heladosController::class, 'helados'] );
Route::get('desucentos/{dinero}',[ControladorPrecios::class, 'Desucentos'] );
Route::get('iva/{Articulo}/{Dinero}',[ControladorPrecios::class, 'IVA'] );
Route::resource('curso', cursoController::class);

