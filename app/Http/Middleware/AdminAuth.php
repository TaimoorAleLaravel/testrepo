<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }
        // return redirect()->route('login');
        return redirect()->route('admin.login', ['locale' => app()->getLocale()]);
        // return redirect()->route('client.login', ['locale' => app()->getLocale()]);

    }
    
}
