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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal')->middleware(LogAcessoMiddleware::class);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/login/{erro?}', [App\Http\Controllers\LoginController::class, 'login'])->name('site.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

Route::prefix('app')->group(function(){
    
    Route::get('/fornecedor', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('app.fornecedor');
    Route::get('/fornecedor/listar', [App\Http\Controllers\FornecedoresController::class, 'listar'])->name('app.fornecedor.listar');
    Route::post('/fornecedor/listar', [App\Http\Controllers\FornecedoresController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', [App\Http\Controllers\FornecedoresController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', [App\Http\Controllers\FornecedoresController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}', [App\Http\Controllers\FornecedoresController::class, 'editar'])->name('app.fornecedor.editar');
    
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

