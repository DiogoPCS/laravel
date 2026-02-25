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

Route::get('/aluno/login', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/aluno/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);
Route::get('/aluno/horario', [App\Http\Controllers\Aluno::class, 'horario']);
Route::get('/aluno/consultar', [App\Http\Controllers\Aluno::class, 'consultar']);
Route::get('/aluno/rematricula', [App\Http\Controllers\Aluno::class, 'rematricula']);
Route::get('/aluno/pedir_documento', [App\Http\Controllers\Aluno::class, 'documento']);
Route::get('/aluno/ficha_desempenho', [App\Http\Controllers\Aluno::class, 'ficha']);
Route::get('/aluno/reconsideracao', [App\Http\Controllers\Aluno::class, 'reconsiderar']);
Route::get('/aluno/vida_escolar', [App\Http\Controllers\Aluno::class, 'vida']);

Route::get('/professor/chamada', [App\Http\Controllers\Professor::class, 'chamada']);




