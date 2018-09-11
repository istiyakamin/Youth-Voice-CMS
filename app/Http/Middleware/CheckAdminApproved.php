<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminApproved
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
        if(Auth::check() && Auth::user()->join_date == NULL){
            Auth::logout();
            session()->flash('message', 'Be patient. An Admin will Approve your account soon');
            return redirect('login');
        }
        return $next($request);
    }
}
