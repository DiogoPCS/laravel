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

Route::prefix('/aluno')->group(function(){
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar']);
    Route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover']);
    Route::post('/editar', [App\Http\Controllers\AlunoController::class, 'editar']);
    Route::post('/listar', [App\Http\Controllers\AlunoController::class, 'listar']);
});