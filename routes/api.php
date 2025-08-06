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

Route::prefix('Usuário')->group(function(){
Route::post('Registrar', [App\Http\Controllers\UsuarioController::class,'Registrar'])->name('usuario-registrar');
Route::post('Login', [App\Http\Controllers\UsuarioController::class,'Login'])->name('usuario-login');
Route::post('Logout', [App\Http\Controllers\UsuarioController::class,'Logout'])->name('usuario-logout');
Route::post('Foto-upload', [App\Http\Controllers\UsuarioController::class,'FotoUpload'])->name('usuario-foto-upload');
Route::post('Desativar-conta', [App\Http\Controllers\UsuarioController::class,'DesativarConta'])->name('usuario-desativar-conta');
Route::post('perfil', [App\Http\Controllers\UsuarioController::class,'perfil'])->name('usuario-perfil');
Route::post('editar', [App\Http\Controllers\UsuarioController::class,'editar'])->name('usuario-editar');
}
);