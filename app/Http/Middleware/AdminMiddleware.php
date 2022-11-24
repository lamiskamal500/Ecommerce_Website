<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            //admin 'admin' == 0
            // moderator 'admin'  == 1
            if(Auth::user()->admin == 1) {
                return $next($request);
            }
        else{
            return redirect('/dashboard')->with('message', 'Access Denied as you are not Admin');
        }
    }
    else {
        return redirect('/login')->with('message', 'Login to access Dashboard');
    }
        return $next($request);
    }

}
