<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/login', [App\Http\Controllers\SobreNosController::class, 'login'])->name('site.login');

Route::prefix('app')->group(function(){
    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.principal').'">Clique para Voltar</a>';
});

Route::get(
    'teste/{p1}/{p2}', 
    [App\Http\Controllers\TesteController::class, 'teste']
);