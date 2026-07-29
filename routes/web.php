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

// Não é necessário mudar o Controlador
Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre');
Route::get('/produtos', [App\Http\Controllers\Principal::class, 'produtos'])->name('produtos');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato');
