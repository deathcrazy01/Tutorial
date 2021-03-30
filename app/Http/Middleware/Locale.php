<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $array = ["en", "cn", "my"];

        if ($request->session()->has('language') and in_array($request->session()->get('language'), $array)) {
            app()->setLocale($request->session()->get('language'));
        } else {
            app()->setLocale(config()->get('app.fallback_locale'));
        }
        
        return $next($request);
    }
}
