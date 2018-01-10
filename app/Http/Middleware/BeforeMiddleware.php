<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // Perform action
    	Log::info("Before");
        return $next($request);
    }
}