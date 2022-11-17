<?php

use App\Http\Controllers\PruebasController;
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

Route::get('/', [PruebasController::class, 'index'])->name('inicio');
Route::get('/creador', [PruebasController::class, 'creador'])->name('creador');
Route::get('/personaje', [PruebasController::class, 'personajes'])->name('personajes');
Route::get('/saga', [PruebasController::class, 'saga'])->name('saga');
