<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Perform action
        Log::info("After");
        return $response;
    }
}