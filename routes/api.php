<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('usuario')->group(function(){
    Route::post('registrar', [App\Http\Controllers\UsuarioController::class, 'registrar'])->name('usuario-registrar');
    Route::post('login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('usuario-login');
    Route::post('logout', [App\Http\Controllers\UsuarioController::class, 'logout'])->name('usuario-logout');
    Route::post('foto-upload', [App\Http\Controllers\UsuarioController::class, 'fotoUpload'])->name('usuario-foto-upload');
    Route::post('desativar-conta', [App\Http\Controllers\UsuarioController::class, 'desativarConta'])->name('usuario-desativar-conta');
    Route::post('perfil', [App\Http\Controllers\UsuarioController::class, 'perfil'])->name('usuario-perfil');
    Route::post('editar', [App\Http\Controllers\UsuarioController::class, 'editar'])->name('usuario-editar');
});
