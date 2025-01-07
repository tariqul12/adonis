<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Session::get('customer_id')) {
            // লগইন পেজ ছাড়া অন্য সব পেজের জন্য বর্তমান URL স্টোর করো
            if (!$request->is('customer/login')) {
                Session::put('redirect_url', $request->fullUrl());
            }
            return redirect('/customer/login');
        }

        return $next($request);
    }
}
