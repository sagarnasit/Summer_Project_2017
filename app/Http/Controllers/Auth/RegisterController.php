<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
      /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
      */

      use RegistersUsers;

      /**
       * Where to redirect users after registration.
       *
       * @var string
       */
      protected $redirectTo = '/';

      public function showRegistrationForm()
      {
            return view('Boot.register');
      }

      public function __construct()
      {
            $this->middleware('guest');
      }


      protected function validator(array $data)
      {
            return Validator::make($data, [
                  'name' => 'required|string|max:255',
                  'email' => 'required|string|email|max:255|unique:users',
                  'password' => 'required|string|min:6|confirmed',
            ]);
      }


      protected function create(array $data)
      {
            return User::create([
                  'name' => $data['name'],
                  'email' => $data['email'],
                  'password' => bcrypt($data['password']),
            ]);
      }
}
