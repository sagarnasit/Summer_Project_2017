<?php



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
            Route::post('/addproduct','Seller\ProductController@store');
//ProductSKu 
            Route::get('/addSKU','Seller\ProductSKUController@index');
            Route::post('/addSKU','Seller\ProductSKUController@store');

//Product Image
            Route::get('/addImage','Seller\ProductImageController@index');
            Route::post('/storeImage','Seller\ProductImageController@store');




      });
});










/*//Ajax Color Request
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
                                    <button class='btn btn-default' type='button' id='123' onclick=\"addSize()\">Add Size</button>
                              </div>
                        </div>
                        <div class='col-md-offset-1 col-md-11'>
                              <div id='addsize'>
                                           
                              </div>      
                       
                        </div>
                 </div>
                  
            </div>
           
            ";
      }


});


Route::get('/getAjaxSize', function () {
      if (Request::ajax()) {
            return"
            <div class='row form-inline'>
            
                  
                   <div class=\"form-group\">
                        <label for=\"email\">Size</label>
                        <select name='size' class='form-control'>
                  </div>
                  <div class=\"form-group\">
   
                      <input type=\"text\" name='mrp' class=\"form-control\"  placeholder='MRP'/>
                  </div>
                  <div class=\"form-group\">
   
                      <input type=\"text\" name='pricr' class=\"form-control\"  placeholder='Price'/>
                  </div>
                  <div class=\"form-group\">
   
                      <input type=\"text\" name='qty' class=\"form-control\"  placeholder='Quantity'/>
                  </div>
            </div>
           
            
            ";

      }
});
*/
