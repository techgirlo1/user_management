<?php


namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (auth()->user() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // If not an admin, return unauthorized response
        return response()->json(['error' => 'Unauthorized. Admins only.'], 403);
    }
}

