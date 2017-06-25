<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use App\User;

class AuthController extends Controller
{
    public function authenticate(){

          $credentials= request()->only('email','password');

          try{
                $token=JWTAuth::attempt($credentials);

                if(!$token){
                      return response()->json(['error'=>'Invalid Credentials'],401);
                }
          }
          catch (JWTException $e){
                return response()->json(['error'=>'Some error accure'],500);
          }
          return response()->json(['token'=>$token],200);
    }

    public function register(){
          $name=request()->name;
          $email=request()->email;
          $password=request()->password;

          $user=User::create([
             'name'=>$name,
                'email'=>$email,
                'password'=>bcrypt($password)
          ]);

          $token=JWTAuth::fromUser($user);

          return response()->json(['token'=>$token],200);
    }
}
