<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfSellerAuthenticated
{
      /**
       * Handle an incoming request.
       *
       * @param  \Illuminate\Http\Request $request
       * @param  \Closure $next
       * @return mixed
       */


      public function handle($request, Closure $next)
      {

            if (Auth::guard()->check()) {
                  return redirect('/');
            }

            if (Auth::guard('web_seller')->check()) {
                  return redirect('/seller_home');
            }
            return $next($request);
      }


}
