<?php

namespace App\Http\Middleware;

use Closure;

class IsEb
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
        if(Auth()->check() && Auth()->user()->position != 'Exicutive Body'){
            
            session()->flash('message', 'You dont have any permission');
            return redirect('404');
        }
        return $next($request);
    }
}
