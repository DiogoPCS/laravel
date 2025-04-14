<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\VotoController;
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

Route::get('/email-teste', function () {
    Mail::raw('Este é um e-mail de teste via Brevo!', function ($message) {
        $message->to('diogo.paulino.santos@hotmail.com')
                ->subject('Teste Brevo');
    });

    return 'E-mail enviado!';
});

Route::get('/', [VotoController::class, 'form'])->name('votar.form');
Route::post('/votar', [VotoController::class, 'enviarVoto'])->name('votar');

Route::get('/confirmar/{code}', [VotoController::class, 'confirmar'])->name('votar.confirmar');