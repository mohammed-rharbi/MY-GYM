<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMeddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()) {
            // If not authenticated, redirect to login page or return unauthorized response
            return redirect()->route('login'); // You may replace 'login' with your desired route
            // or return a JSON response with 401 status code
            // return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return $next($request);
    }
}
