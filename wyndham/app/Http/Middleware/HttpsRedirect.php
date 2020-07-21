<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class HttpsRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(env('APP_ENV') == 'Production' || env('APP_ENV') == 'Test'){
            URL::forceScheme('https');
        }
        return $next($request);
    }
}