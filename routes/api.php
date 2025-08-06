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
    Route::post('registrar-se', [App\Http\Controller\UsuarioController::class, 'registrar']);
    Route::post('login', [App\Http\Controller\UsuarioController::class, 'login']);
    Route::post('logout', [App\Http\Controller\UsuarioController::class, 'logout']);
    Route::post('desativar-conta', [App\Http\Controller\UsuarioController::class, 'desativarConta']);
    Route::post('foto-upload', [App\Http\Controller\UsuarioController::class, 'fotoUpload']);
    Route::post('editar', [App\Http\Controller\UsuarioController::class, 'editar']);
    Route::post('perfil', [App\Http\Controller\UsuarioController::class, 'perfil']);
});