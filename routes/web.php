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

Route::get('/produto', [App\Http\Controllers\ProdutoController::class, 'formulario'])->name('produto-formulario');

Route::post('/produto-store', [App\Http\Controllers\ProdutoController::class, 'store'])->name('produto-store');

Route::get('/produto-listar', [App\Http\Controllers\ProdutoController::class, 'listar'])->name('produto-listar');

Route::get('/produto-remover/{id}/{nome}', [App\Http\Controllers\ProdutoController::class, 'remover'])->name('produto-remover');



Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::post('/remove', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::post('/edit', [App\Http\Controllers\AlunoController::class, 'edit'])->name('aluno.edit');
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name('aluno.list');
}); 
