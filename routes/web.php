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

Route::get('/', [App\Http\Controllers\VeiculoClienteController::class, 'formulario'])->name('veiculo-formulario');
Route::post('/', [App\Http\Controllers\VeiculoClienteController::class, 'store'])->name('veiculo-store');
Route::get('/', [App\Http\Controllers\VeiculoClienteController::class, 'listar'])->name('veiculo-listar');
Route::get('/', [App\Http\Controllers\VeiculoClienteController::class, 'remover'])->name('veiculo-remover');
Route::get('/', [App\Http\Controllers\VeiculoClienteController::class, 'editar'])->name('veiculo-editar');

Route::get('/', [App\Http\Controllers\ProprietarioController::class, 'formulario'])->name('proprietario-formulario');
Route::post('/', [App\Http\Controllers\ProprietarioController::class, 'store'])->name('proprietario-store');
Route::get('/', [App\Http\Controllers\ProprietarioController::class, 'listar'])->name('proprietario-listar');
Route::get('/', [App\Http\Controllers\ProprietarioController::class, 'remover'])->name('proprietario-remover');
Route::get('/', [App\Http\Controllers\ProprietarioController::class, 'editar'])->name('proprietario-editar');

Route::get('/', [App\Http\Controllers\AnuncioController::class, 'formulario'])->name('anuncio-formulario');
Route::post('/', [App\Http\Controllers\AnuncioController::class, 'store'])->name('anuncio-store');
Route::get('/', [App\Http\Controllers\AnuncioController::class, 'listar'])->name('anuncio-listar');
Route::get('/', [App\Http\Controllers\AnuncioController::class, 'remover'])->name('anuncio-remover');
Route::get('/', [App\Http\Controllers\AnuncioController::class, 'editar'])->name('anuncio-editar');




