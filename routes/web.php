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

Route::get('/', [App\Http\Controllers\Inicio::class, 'inicio'])->name('pagina-inicial');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao'])->name('adocao');
Route::get('/detalhes-animal', [App\Http\Controllers\DetalhesAnimal::class, 'detalhesAnimal'])->name('detalhes-animal');
Route::get('/listar-animais', [App\Http\Controllers\ListarAnimais::class, 'listarAnimais'])->name('listar-animais');
Route::get('/login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('/registro', [App\Http\Controllers\Registro::class, 'registro'])->name('registro');

Route::post('/registro', [App\Http\Controllers\Registro::class, 'criarConta'])->name('registro');

