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

      protected $redirectTo = '/seller_home';

      //Custom guard for seller
      protected function guard()
      {
            return Auth::guard('web_seller');
      }

      public function showLoginForm()
      {
            return view('seller.auth.login');
      }


}
