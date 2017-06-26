<?php

namespace TelSUR\Http\Middleware;

use Closure;

class personalMiddleware
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
        if (\Auth::user()->personalins) {
            return $next($request);
       } else {
            return abort(503);
       }
    }
}
