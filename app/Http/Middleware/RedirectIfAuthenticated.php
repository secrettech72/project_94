<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(auth()->user()->role_id == 1 && \Request::is('admin/login')){
                return redirect('/admin/dashboard');
            }elseif(auth()->user()->role_id == 2 && \Request::is('project_94/login')){
                return redirect('project_94/teacher/dashboard');
            }
        }

        return $next($request);
    }
}
