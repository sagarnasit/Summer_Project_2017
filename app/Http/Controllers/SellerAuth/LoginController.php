<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller
{
      use AuthenticatesUsers;

      protected $redirectTo = '/seller/login';

      //Custom guard for seller
      protected function guard()
      {
            return Auth::guard('web_seller');
      }

      public function showLoginForm()
      {
            return view('seller.auth.login');
      }

      public function logout(Request $request)
      {
            $this->guard('web_seller')->logout();

            $request->session()->flush();

            $request->session()->regenerate();

            return redirect()->route('seller.home');
      }

}
