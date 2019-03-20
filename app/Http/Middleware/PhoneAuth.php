<?php

namespace App\Http\Middleware;

use Closure;

class PhoneAuth
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
        if ($request->session()->get('phone_auth')=='ok'){
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
