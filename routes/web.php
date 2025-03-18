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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao'])->name('adocao');
Route::get('/cadastrar-animal', [App\Http\Controllers\CadastrarAnimal::class, 'cadastrarAnimal'])->name('cadastrar-animal');
Route::get('/registrar', [App\Http\Controllers\Registrar::class, 'registrar'])->name('registrar');
Route::get('/usuario', [App\Http\Controllers\Usuario::class, 'usuario'])->name('usuario');
Route::get('/login', [App\Http\Controllers\Login::class, 'login'])->name('login');

