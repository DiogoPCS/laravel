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
Route::get('/contato', [App\Http\Controllers\Contato::class, 'contato']);
Route::get('/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);
Route::get('/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
Route::get('/email_institucional', [App\Http\Controllers\Aluno::class, 'enviarEmail']);
Route::get('/retirar_documentos', [App\Http\Controllers\Aluno::class, 'retirar_documentos']);
Route::get('/controle_faltas', [App\Http\Controllers\Aluno::class, 'controle_faltas']);
Route::get('/login', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/login', [App\Http\Controllers\Professor::class, 'login']);
Route::get('/chamada', [App\Http\Controllers\Professor::class, 'chamada']);
Route::get('/notas', [App\Http\Controllers\Professor::class, 'notas']);






