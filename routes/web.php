<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutosCadastroController;
use App\Http\Controllers\ProdutoController;



use App\Models\Produto;

Route::post('/admin/carousel/update', [App\Http\Controllers\CarouselController::class, 'update'])->name('carousel.update')->middleware('auth');

Route::get('/', function () {
    $produtos = Produto::latest()->get();
    return view('home', compact('produtos'));
});


Route::get('/produto/{produto}', [\App\Http\Controllers\ProdutoController::class, 'publicShow'])->name('produto.show');

Route::get('/buscar', [\App\Http\Controllers\ProdutoController::class, 'publicSearch'])->name('produtos.search');

Route::get('/produtos/suggest', [\App\Http\Controllers\ProdutoController::class, 'suggest'])->name('produtos.suggest');



require __DIR__.'/auth.php';



Route::middleware('auth')->group(function () {

   
    Route::get('/produtos-cadastrados', [ProdutosCadastroController::class, 'index'])
         ->name('produtos.listagem'); 

    Route::resource('produtos', ProdutoController::class); 


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



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