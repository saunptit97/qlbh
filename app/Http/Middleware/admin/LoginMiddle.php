<?php

namespace App\Http\Middleware\admin;

use Closure;

class LoginMiddle
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
        if($request->session()->has('user') && $request->session()){
            return $next($request);
        }else{
            return redirect('/login');
        }

    }
}
