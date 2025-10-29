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

use App\Models\Produto;

Route::get('/', function () {
    // Pass the latest products to the home view so the listing can render dynamic data
    $produtos = Produto::latest()->get();
    return view('home', compact('produtos'));
});


Route::get('/produto/{produto}', [\App\Http\Controllers\ProdutoController::class, 'publicShow'])->name('produto.show');

// Public search route used by the header search form
Route::get('/buscar', [\App\Http\Controllers\ProdutoController::class, 'publicSearch'])->name('produtos.search');


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