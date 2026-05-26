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

Route::prefix('/loginaluno')->group(function(){ // grupo de rotas de alunos
    Route::get('/index', [App\Http\Controllers\LoginAlunoController::class, 'index'])->name('loginaluno.index');
    Route::get('/cadastro', [App\Http\Controllers\LoginAlunoController::class, 'cadastro'])->name('loginaluno.cadastro');
    Route::post('/adicionar', [App\Http\Controllers\LoginAlunoController::class, 'adicionar'])->name('loginaluno.adicionar');
    Route::post('/remover', [App\Http\Controllers\LoginAlunoController::class, 'remover'])->name('loginaluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\LoginAlunoController::class, 'atualizar'])->name('loginaluno.atualizar');
    Route::get('/consultar', [App\Http\Controllers\LoginAlunoController::class, 'consultar'])->name('loginaluno.consultar');

}); 

//www.xuxa.com.br/aluno/adicionar




