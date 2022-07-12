<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DulcesControlador;

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

Route::get('/salida', function () {
    return view('Salida');
});

Route::get('/dulces', [DulcesControlador::class, 'index']);

Route::get('/dulces/crear', [DulcesControlador::class, 'create']);

Route::post('/dulces/crear', [DulcesControlador::class, 'store']);

Route::get('/dulces/ver/{id}', [DulcesControlador::class, 'show']);
Route::get('/dulces/editar/{id}', [DulcesControlador::class, 'edit']);
Route::put('/dulces/editar/{id}', [DulcesControlador::class, 'update']);

Route::get('/dulces/eliminar/{id}', [DulcesControlador::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
