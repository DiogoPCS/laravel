<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;


Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);


