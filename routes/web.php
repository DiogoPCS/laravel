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

Route::get('/', [App\Http\Controllers\Principal::class, 'viewPrincipal'])->name('view.principal');
Route::get('/sobre-nos', [App\Http\Controllers\Principal::class, 'viewSobreNos'])->name('view.sobrenos');

Route::get('/contato', [App\Http\Controllers\Principal::class, 'viewContato'])->name('view.contato');
Route::post('/contato', [App\Http\Controllers\Principal::class, 'salvarContato'])->name('salvar.contato');

Route::get('/listar-contatos', [App\Http\Controllers\Principal::class, 'listarContatos'])->name('view.lista-contatos');

Route::get('/delete/', [App\Http\Controllers\Principal::class, 'listarContatos'])->name('view.lista-contatos');



