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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']) ->name('view-principal');
Route::get('/registrar', [App\Http\Controllers\Registrar::class, 'registrar']) ->name('view-registrar');
Route::get('/doacao', [App\Http\Controllers\Doacao::class, 'doacao']);
Route::get('/cadastroAnimal', [App\Http\Controllers\cadastroAnimal::class, 'CadastroAnimal']);

Route::post('/registrar', [App\Http\Controllers\Registrar::class, 'criarConta']) ->name('criar-conta');
