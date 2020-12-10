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
    return view('welcome');
});

Route::resource('/apartamentos', 'App\Http\Controllers\ApartamentoController'); 
Route::resource('/clientes', 'App\Http\Controllers\ClienteController'); 
Route::resource('/productos', 'App\Http\Controllers\ProductoController');
Route::resource('/estudiantes', 'App\Http\Controllers\EstudianteController');
Route::resource('/materias', 'App\Http\Controllers\MateriaController');
Route::resource('/laboratorios', 'App\Http\Controllers\LaboratorioController');

Route::get('/', function () {
    return view('welcome');
});
