<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheOfflineData
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        // Cachear respostas GET para uso offline
        if ($request->isMethod('GET')) {
            $key = 'offline_' . md5($request->fullUrl());
            Cache::put($key, $response->getContent(), now()->addDay());
        }
        
        return $response;
    }
}