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

Route::prefix('/jogo')->group(function(){
Route::get('/index', [App\Http\Controllers\JogoController::class, 'index'])->name('jogo.index');
});

Route::prefix('/plataforma')->group(function(){
    Route::get('/index', [App\Http\Controllers\plataformaController::class, 'index'])->name('plataforma.index');
    });


    Route::prefix('/usadp')->group(function(){
        Route::get('/index', [App\Http\Controllers\usadpController::class, 'index'])->name('usadp.index');
        });

        Route::prefix('/retro')->group(function(){
            Route::get('/index', [App\Http\Controllers\retroController::class, 'index'])->name('retro.index');
            });

            Route::prefix('/colecionador')->group(function(){
                Route::get('/index', [App\Http\Controllers\colecionadorController::class, 'index'])->name('colecionador.index');
                });

