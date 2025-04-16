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
Route::get('/teste', [App\Http\Controllers\Principal::class, 'teste']);
Route::get('/conectar', [App\Http\Controllers\Usuario::class, 'conectar']);
Route::get('/desconectar', [App\Http\Controllers\Usuario::class, 'desconectar']);

Route::get('/', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao'])->name('adocao');
Route::get('/detalhes-animal', [App\Http\Controllers\DetalhesAnimal::class, 'detalhesAnimal'])->name('detalhesAnimal');
Route::get('/listar-animais', [App\Http\Controllers\ListarAnimais::class, 'listarAnimais'])->name('listarAnimais');
Route::get('/login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('/registro', [App\Http\Controllers\Registro::class, 'registro'])->name('registro');

Route::get('/add-animal', [App\Http\Controllers\AddAnimal::class, 'addAnimal'])->name('addAnimal');

Route::post('/add-animal', [App\Http\Controllers\AddAnimal::class, 'addAnimal'])->name('addAnimal');
Route::post('/registro', [App\Http\Controllers\Registro::class, 'registro'])->name('registro');





