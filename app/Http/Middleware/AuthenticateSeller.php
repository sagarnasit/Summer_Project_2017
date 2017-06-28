<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

        public function handle($request,Closure $next){

            if(!Auth::guard('web_seller')->check()){
                  return redirect()->route('seller.login');
            }
              return $next($request);
        }


}
