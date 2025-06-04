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

Route::get('/proprietario/adicionar', [App\Http\Controllers\PropriedadeController::class, 'adicionar'])->name('proprietario-adicionar');
Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('/proprietario/listar', [App\Http\Controllers\PropriedadeController::class, 'listar'])->name('proprietario-listar');
Route::get('/proprietario/remover', [App\Http\Controllers\PropriedadeController::class, 'remover'])->name('proprietario-remover');
Route::get('/proprietario/editar', [App\Http\Controllers\PropriedadeController::class, 'editar'])->name('proprietario-editar');


Route::get('/anuncio/adicionar', [App\Http\Controllers\PropriedadeController::class, 'adicionar'])->name('anuncio-adicionar');
Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo-store');
Route::get('/anuncio/listar', [App\Http\Controllers\PropriedadeController::class, 'listar'])->name('anuncio-listar');
Route::get('/anuncio/remover', [App\Http\Controllers\PropriedadeController::class, 'remover'])->name('anuncio-remover');
Route::get('/anuncio/editar', [App\Http\Controllers\PropriedadeController::class, 'editar'])->name('anuncio-editar');




