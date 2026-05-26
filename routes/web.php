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

Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
    Route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover'])->name('aluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::get('/consultar', [App\Http\Controllers\AlunoController::class, 'consultar'])->name('aluno.consultar');
});




Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 
