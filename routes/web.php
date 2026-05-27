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
    Route::post('/add', [App\Http\Controllers\AlunoController::class, 'add'])->name('aluno.add');
    Route::get('/remove/{id}', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
}); 

Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/add', [App\Http\Controllers\CursoController::class, 'add'])->name('curso.add');
    Route::get('/remove/{id}', [App\Http\Controllers\CursoController::class, 'remove'])->name('curso.remove');
}); 

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/add', [App\Http\Controllers\ProfessorController::class, 'add'])->name('professor.add');
    Route::get('/remove/{id}', [App\Http\Controllers\ProfessorController::class, 'remove'])->name('professor.remove');
}); 

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'index'])->name('componente.index');
    Route::post('/add', [App\Http\Controllers\ComponenteController::class, 'add'])->name('componente.add');
    Route::get('/remove/{id}', [App\Http\Controllers\ComponenteController::class, 'remove'])->name('componente.remove');
}); 
Route::prefix('/administrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdminController::class, 'index'])->name('adm.index');
    Route::post('/add', [App\Http\Controllers\AdminController::class, 'add'])->name('admin.add');
    Route::get('/remove/{id}', [App\Http\Controllers\AdminController::class, 'remove'])->name('admin.remove');
}); 