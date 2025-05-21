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

Route::get('cliente/add', [App\Http\Controllers\ClienteController::class, 'add'])->name('add-cliente');

Route::post('cliente/add', [App\Http\Controllers\ClienteController::class, 'store'])->name('store-cliente');




