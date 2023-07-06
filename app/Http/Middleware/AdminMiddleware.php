<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If user login than redirect to dashboard otherwise redirect to login page
        if(!empty(Auth::check())){
            if((Auth::user()->user_type == 1)){ 
                return $next($request);
            }else{
                Auth::logout();
                return redirect(url(''));
            }
        }else{
            Auth::logout();
            return redirect(url(''));
        }
    }
}
