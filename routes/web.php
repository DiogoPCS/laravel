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

Route::get('/', [App\Http\Controllers\Principal::class, 'view'])->name('view.principal');

Route::get('/add-personagem', [App\Http\Controllers\Personagem::class, 'view'])->name('view.add.personagem');
Route::post('/add-personagem', [App\Http\Controllers\Personagem::class, 'salvarPersonagem'])->name('view.add.personagem');

Route::get('/listar-personagem', [App\Http\Controllers\Personagem::class, 'listarPersonagem'])->name('view.listar.personagem');




