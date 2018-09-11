<?php

namespace App\Http\Middleware;


use Closure;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LastUserActivity
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
        if (Auth::check()){
            $expireAt = Carbon::now()->addMinute(1);
            Cache::put('user-is-online-' . Auth::user()->id, true, $expireAt);
        }
        return $next($request);
    }
}
