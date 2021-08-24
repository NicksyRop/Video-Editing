<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {




        if(Auth::user()->duty == 'Freelancer' && Auth::user()->verified == 1 && Auth::user()->p_submitted == 1 && Auth::user()->t_submitted == 1){

            return $next($request);
        }elseif(Auth::user()->duty == 'Freelancer' && Auth::user()->p_submitted == 0 && Auth::user()->verified === null && Auth::user()->t_submitted == 0){

            return redirect()->route('profile_create');
        }elseif(Auth::user()->duty == 'Freelancer' && Auth::user()->p_submitted == 1 && Auth::user()->t_submitted == 0 && Auth::user()->verified === null ){
            return redirect()->route('freelancer.test');
        }elseif(Auth::user()->duty == 'Freelancer' && Auth::user()->verified === null && Auth::user()->p_submitted == 1 && Auth::user()->t_submitted == 1){

            return redirect()->route('welcome');
        }elseif(Auth::user()->duty == 'Freelancer' && Auth::user()->verified == 0 && Auth::user()->p_submitted == 1 && Auth::user()->t_submitted == 1 ){

            return redirect()->route('logout');
        }else{
            abort(403);
        }
    }
}
