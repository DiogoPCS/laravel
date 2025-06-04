<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('veiculo/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('veiculo-formulario');
Route::post('veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('veiculo/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('veiculo-listar');
Route::get('veiculo/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('veiculo-remover');
Route::get('veiculo/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('veiculo-editar');


Route::get('propietario/formulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('proprietario-formulario');
Route::post('veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('proprietario/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('proprietario-listar');
Route::get('proprietario/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('proprietario-remover');
Route::get('proprietario/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('proprietario-editar');


Route::get('anuncio/fromulario', [App\Http\Controllers\VeiculoController::class, 'formulario'])->name('anuncio-formulario');
Route::post('veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('anuncio-store');
Route::get('anuncio/listar', [App\Http\Controllers\VeiculoController::class, 'listar'])->name('anuncio-listar');
Route::get('anuncio/remover', [App\Http\Controllers\VeiculoController::class, 'remover'])->name('anuncio-remover');
Route::get('anuncio/editar', [App\Http\Controllers\VeiculoController::class, 'editar'])->name('anuncio-editar');



