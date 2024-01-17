<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlatoController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\TipoPlatoController;
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

Route::get('/', function () {
    return view('Hola');
});
Route::get('/adios', function () {
    return view('Adios');
});
// Route::get('/platos', [PlatoController::class,'index']);
Route::resource('/platos', PlatoController::class);
Route::resource('/bebidas', BebidaController::class);
Route::resource('/carta', CartaController::class);
Route::resource('/tipos_platos', TipoPlatoController::class);