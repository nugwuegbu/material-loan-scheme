<?php

namespace App\Http\Middleware;

use Closure;

class IsContractor
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
       if (auth()->user()->is_contractor==1) {
            # code...
             return $next($request);
        }
        return redirect(‘home’)->with(‘error’,"You don't have contractor access.");
    }
}
