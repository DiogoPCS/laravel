<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\usadoController;
use App\Http\Controllers\retroController;
use App\Http\Controllers\colecionadorController;
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

Route::prefix('/jogo')->group(function(){
    Route::get('/index', [JogoController::class, 'index'])->name('jogo.index');
    Route::post('/add', [JogoController::class, 'add'])->name('jogo.add');
    Route::delete('/remove', [JogoController::class, 'remove'])->name('jogo.remove');
});

Route::prefix('/plataforma')->group(function(){
    Route::get('/index', [App\Http\Controllers\PlataformaController::class, 'index'])->name('plataforma.index');
    Route::post('/add', [App\Http\Controllers\PlataformaController::class, 'add'])->name('plataforma.add');
    Route::post('/remove', [App\Http\Controllers\PlataformaController::class, 'remove'])->name('plataforma.remove');
    });


Route::prefix('/usado')->group(function(){
    Route::get('/index', [App\Http\Controllers\usadoController::class, 'index'])->name('usado.index');
    Route::post('/add', [App\Http\Controllers\usadoController::class, 'add'])->name('usado.add');
    Route::post('/remove', [App\Http\Controllers\usadoController::class, 'remove'])->name('usado.remove');
    });

Route::prefix('/retro')->group(function(){
    Route::get('/index', [App\Http\Controllers\retroController::class, 'index'])->name('retro.index');
    Route::post('/add', [App\Http\Controllers\retroController::class, 'add'])->name('retro.add');
    Route::post('/remove', [App\Http\Controllers\retroController::class, 'remove'])->name('retro.remove');
    });

Route::prefix('/colecionador')->group(function(){
    Route::get('/index', [App\Http\Controllers\colecionadorController::class, 'index'])->name('colecionador.index');
    Route::post('/add', [App\Http\Controllers\colecionadorController::class, 'add'])->name('colecionador.add');
    Route::post('/remove', [App\Http\Controllers\colecionadorController::class, 'remove'])->name('colecionador.remove');
    });

