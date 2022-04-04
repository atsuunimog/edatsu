<?php

namespace App\Http\Middleware;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class roleAccess
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
        //check the current directory and redirect users if they have not role acces
        //if below does not work, set role as parameters for each middleware call
        $admin_key = "admin";
        $sub_key = "subscriber";

        if(Auth::user() !== null){
           if(strpos($request->url(), $sub_key) !== false){
              if(Auth::user()->role !== "subscriber"):
                return redirect(RouteServiceProvider::ROOT);
              endif;
           }elseif(strpos($request->url(), $admin_key) !== false){
              if(Auth::user()->role !== "admin"):
                return redirect(RouteServiceProvider::ROOT);
              endif;
           }
        }

        return $next($request);
        //set role access conditions for user based on current directory

    }
}
