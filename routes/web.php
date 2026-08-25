<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\controleController;
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
    Route::delete('/remove/{id}', [JogoController::class, 'remove'])->name('jogo.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\JogoController::class, 'atualizar'])->name('jogo.atualizar');
    Route::post('/save', [App\Http\Controllers\JogoController::class, 'save'])->name('jogo.save');
});

Route::prefix('/console')->group(function(){
    Route::get('/index', [consoleController::class, 'index'])->name('console.index');
    Route::post('/add', [consoleController::class, 'add'])->name('console.add');
    Route::delete('/remove/{id}', [consoleController::class, 'remove'])->name('console.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\consoleController::class, 'atualizar'])->name('console.atualizar');
    Route::post('/save', [App\Http\Controllers\consoleController::class, 'save'])->name('console.save');
});

Route::prefix('/controle')->group(function(){
    Route::get('/index', [controleController::class, 'index'])->name('controle.index');
    Route::post('/add', [controleController::class, 'add'])->name('controle.add');
    Route::delete('/remove/{id}', [controleController::class, 'remove'])->name('controle.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\controleController::class, 'atualizar'])->name('controle.atualizar');
    Route::post('/save', [App\Http\Controllers\controleController::class, 'save'])->name('controle.save');
});

Route::prefix('/acessorio')->group(function(){
    Route::get('/index', [acessorioController::class, 'index'])->name('acessorio.index');
    Route::post('/add', [acessorioController::class, 'add'])->name('acessorio.add');
    Route::delete('/remove/{id}', [acessorioController::class, 'remove'])->name('acessorio.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\acessorioController::class, 'atualizar'])->name('acessorio.atualizar');
    Route::post('/save', [App\Http\Controllers\acessorioController::class, 'save'])->name('acessorio.save');
});

Route::prefix('/plataforma')->group(function(){
    Route::get('/index', [App\Http\Controllers\PlataformaController::class, 'index'])->name('plataforma.index');
    Route::post('/add', [App\Http\Controllers\PlataformaController::class, 'add'])->name('plataforma.add');
    Route::post('/remove', [App\Http\Controllers\PlataformaController::class, 'remove'])->name('plataforma.remove');
    });

    Route::prefix('/digital')->group(function(){
    Route::get('/index', [App\Http\Controllers\digitalController::class, 'index'])->name('digital.index');
    Route::post('/add', [App\Http\Controllers\digitalController::class, 'add'])->name('digital.add');
    Route::post('/remove', [App\Http\Controllers\digitalController::class, 'remove'])->name('digital.remove');
    });

    Route::prefix('/cor')->group(function(){
    Route::get('/index', [App\Http\Controllers\corController::class, 'index'])->name('cor.index');
    Route::post('/add', [App\Http\Controllers\corController::class, 'add'])->name('cor.add');
    Route::post('/remove', [App\Http\Controllers\corController::class, 'remove'])->name('cor.remove');
    });

    Route::prefix('/desbloqueado')->group(function(){
    Route::get('/index', [App\Http\Controllers\desbloqueadoController::class, 'index'])->name('desbloqueado.index');
    Route::post('/add', [App\Http\Controllers\desbloqueadoController::class, 'add'])->name('desbloqueado.add');
    Route::post('/remove', [App\Http\Controllers\desbloqueadoController::class, 'remove'])->name('desbloqueado.remove');
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

