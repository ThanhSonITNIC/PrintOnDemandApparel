<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessLevels
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if(!in_array(Auth::user()->id_level, $levels)){
            return abort(403, 'Access denied');
        }

        return $next($request);
    }
}
