<?php

namespace App\Http\Middleware;

use Closure;

class CustomAuth
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authorized to access the URL based on session data
        if (session('user')) {
            // Allow access to the URL
            return $next($request);
        } else {
            // Redirect or return an error response
            return redirect()->route('login');
        }
    }
}
