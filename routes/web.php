<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Boot.index');
});

//Login
Route::get('/login',function (){
      return view('Boot.login');
});

//Register
Route::get('/register',function(){
      return view('Boot.register');
});

//Static Page
Route::get('/contact',function(){return view('Boot.contact');});
Route::get('/about',function(){return view('Boot.about');});

//Cart
Route::get('/cart',function() {
      return view('Boot.cart');
});

//Reset Password


Route::get('/postman',function (){

      $token=JWTAuth::getToken();

      $user=JWTAuth::toUser($token);

      return $user;
})->middleware('jwt.auth');

Route::post('/authenticate',[
      'uses'=>'AuthController@authenticate'
]);
Route::post('/reg',[
      'uses'=>'AuthController@register'
]);
