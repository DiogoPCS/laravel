<?php

use App\Http\Controllers\Admin\ArtigoController as AdminArtigoController;
use App\Http\Controllers\Admin\AulaController as AdminAulaController;
use App\Http\Controllers\Admin\CursoController as AdminCursoController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/artigos', [ArtigoController::class, 'index'])->name('artigos.index');
Route::get('/artigos/{artigo:slug}', [ArtigoController::class, 'show'])->name('artigos.show');

Route::middleware('guest')->group(function () {
    Route::get('/registro', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/registro', [RegisteredUserController::class, 'store']);

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/cursos/{curso:slug}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/{curso:slug}/aulas/{aula}', [CursoController::class, 'aula'])->name('cursos.aulas.show');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/cursos', [AdminCursoController::class, 'index'])->name('cursos.index');
    Route::get('/cursos/criar', [AdminCursoController::class, 'create'])->name('cursos.create');
    Route::post('/cursos', [AdminCursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{curso:slug}', [AdminCursoController::class, 'edit'])->name('cursos.edit');
    Route::put('/cursos/{curso:slug}', [AdminCursoController::class, 'update'])->name('cursos.update');
    Route::delete('/cursos/{curso:slug}', [AdminCursoController::class, 'destroy'])->name('cursos.destroy');

    Route::get('/cursos/{curso:slug}/aulas/criar', [AdminAulaController::class, 'create'])->name('aulas.create');
    Route::post('/cursos/{curso:slug}/aulas', [AdminAulaController::class, 'store'])->name('aulas.store');
    Route::get('/aulas/{aula}/editar', [AdminAulaController::class, 'edit'])->name('aulas.edit');
    Route::put('/aulas/{aula}', [AdminAulaController::class, 'update'])->name('aulas.update');
    Route::delete('/aulas/{aula}', [AdminAulaController::class, 'destroy'])->name('aulas.destroy');

    Route::get('/artigos', [AdminArtigoController::class, 'index'])->name('artigos.index');
    Route::get('/artigos/criar', [AdminArtigoController::class, 'create'])->name('artigos.create');
    Route::post('/artigos', [AdminArtigoController::class, 'store'])->name('artigos.store');
    Route::get('/artigos/{artigo:slug}/editar', [AdminArtigoController::class, 'edit'])->name('artigos.edit');
    Route::put('/artigos/{artigo:slug}', [AdminArtigoController::class, 'update'])->name('artigos.update');
    Route::delete('/artigos/{artigo:slug}', [AdminArtigoController::class, 'destroy'])->name('artigos.destroy');
});
