<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController; // <--- ADICIONE ESTA LINHA
use App\Http\Controllers\Principal;     // (Você provavelmente também precisa destes)
use App\Http\Controllers\Produto;
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

Route::get('/produto', [App\Http\Controllers\Produto::class, 'visualizar']);
Route::get('/produto/cadastrar', [App\Http\Controllers\Produto::class, 'cadastrar']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'store']);
