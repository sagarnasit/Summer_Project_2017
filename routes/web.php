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
      return view('Boot.auth.login');
});

//Register
Route::get('/register',function(){
      return view('Boot.auth.register');
});

//Static Page
Route::get('/contact',function(){return view('Boot.contact');});
Route::get('/about',function(){return view('Boot.about');});

//Cart
Route::get('/cart',function() {
      return view('Boot.cart');
});

Route::prefix('seller')->group(function () {

//Logged in users/seller cannot access or send requests these pages
      Route::group( [  'middleware' => 'seller_guest'], function() {


            Route::get('register', 'SellerAuth\RegisterController@showRegistrationForm')->name('seller.register');
            Route::post('register', 'SellerAuth\RegisterController@register');
            Route::get('login', 'SellerAuth\LoginController@showLoginForm')->name('seller.login');
            Route::post('login', 'SellerAuth\LoginController@login')->name('seller.login.submit');
            //Password reset routes
            Route::get('password/reset', 'SellerAuth\ForgotPasswordController@showLinkRequestForm');
            Route::post('password/email', 'SellerAuth\ForgotPasswordController@sendResetLinkEmail');
            Route::get('password/reset/{token}', 'SellerAuth\ResetPasswordController@showResetForm');
            Route::post('password/reset', 'SellerAuth\ResetPasswordController@reset');

      });

//Only logged in sellers can access or send requests to these pages
      Route::group(['middleware' => 'seller_auth'], function(){

            Route::post('logout', 'SellerAuth\LoginController@logout')->name('seller.logout');
//Seller Home Route
            Route::get('dashboard', function(){
                  return view('Vendor.index');
            })->name('seller.home');
//Product Route
            Route::get('/addproduct','Seller\ProductController@index');



      });
});


Route::post('/addproduct','Seller\ProductController@store');

//Ajax Color Request
Route::get('/getAjaxColor', function () {
      if (Request::ajax()) {
            return
            "<div class='row' id='colordiv'>
                 <div class=\"form-group row\" align=\"left\">
                       <div class=\"col-md-4\">
                        <label  class=\"col-sm-2 control-label\">Color</label>
                        <div class=\"col-sm-10\">
                              <select class=\"form-control\">
                              
                              </select>
                             
                            </div>
                       </div>
                        <div class='row'>
                              <div class='form-group'>
                                    <button class='btn btn-default' type='button' id='buttonsize'>Add Size</button>
                              </div>
                        </div>
                        <div class='col-md-offset-1 col-md-11'>
                              <div id='addsize'>
                                           
                              </div>      
                       
                        </div>
                 </div>
                  
            </div>";
      }


});


Route::get('/getAjaxSize', function () {
      if (Request::ajax()) {
            return"
            <div class='row form-inline'>
            
                  jnn
                  <div class='form-group'>
                        <select class='form-control' name='size'></select>
                  </div>
                                    <div class=\"form-group\">
                      <label class=\"sr-only\" for=\"exampleInputEmail3\">Email address</label>
                      <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                      <label class=\"sr-only\" for=\"exampleInputPassword3\">Password</label>
                      <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword3\" placeholder=\"Password\">
                    </div>
                   
            </div>
           
            
            ";

      }
});












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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
