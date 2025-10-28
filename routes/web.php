<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutosCadastroController;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas (Loja Virtual - Acessíveis sem login)
|--------------------------------------------------------------------------
*/

// A rota raiz ("/") vai carregar sua loja
Route::get('/', function () {
    return view('home'); //
})->name('home');

// A rota /exibir-produto também será pública
Route::get('/exibir-produto', function () {
    return view('exibir-produto'); //
});


/*
|--------------------------------------------------------------------------
| Rotas de Autenticação (Breeze)
|--------------------------------------------------------------------------
*/
// Isso define as rotas /login, /logout, etc.
// Acessar /login levará para login.blade.php
require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Rotas Protegidas (Admin - Exigem Login)
|--------------------------------------------------------------------------
*/
// Tudo dentro deste grupo só pode ser acessado após o login.
Route::middleware('auth')->group(function () {

    // --- SUAS ROTAS DE ADMIN ---
    
    // Rota da listagem de produtos
    Route::get('/produtos-cadastrados', [ProdutosCadastroController::class, 'index'])
         ->name('produtos.listagem'); //

    // Rota de resource para C-R-U-D (inclui /produtos/create)
    Route::resource('produtos', ProdutoController::class); //

    // --- Rotas Padrão do Breeze (Perfil, etc.) ---
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Rota de DEV (Opcional, pode manter)
if (app()->environment('local')) {
    Route::get('/dev/create-admin', function () {
        $user = \App\Models\User::updateOrCreate([
            'email' => 'admin@tatuigames.com',
        ], [
            'name' => 'Admin Tatuigames',
            'password' => \Illuminate\Support\Facades\Hash::make('3N2xq4mkG'),
        ]);

        return response()->json(['created' => true, 'email' => $user->email]);
    });
}