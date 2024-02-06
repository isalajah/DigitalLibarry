<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; 
use Closure;
use Illuminate\Http\Request;
class authRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(Auth::check() && in_array(Auth::user()->role, $roles)){
            return $next($request);
          }
          abort(403, 'Gaboleh Masuk');
        }
}

