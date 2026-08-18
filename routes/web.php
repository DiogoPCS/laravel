<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;


Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

// app/Http/Middleware/CheckOnlineStatus.php
class CheckOnlineStatus
{
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('is_online')) {
            $request->session()->put('is_online', true);
        }
        
        return $next($request);
    }
}