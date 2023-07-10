<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoldadoController;

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
    return view('welcome');
});


Route::get('/soldados/create', [SoldadoController::class, 'create'])->name('soldados.create');
Route::post('/soldados', [SoldadoController::class, 'store'])->name('soldados.store');
Route::get('/soldados/seed', [SoldadoController::class, 'seedData'])->name('soldados.seed');
