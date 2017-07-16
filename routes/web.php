<?php

use App\ProductMaster;



//Home Page
Route::get('/','DispalyProductController@index');

//show products
Route::get('/product','DispalyProductController@showall');

//searching
Route::get('/search','DispalyProductController@searchall');

//Add category and Brand in nav baar
/*Route::post('/','AddCatBrandController@index');*/

//UserLogin
Route::get('/login','Auth\LoginController@showLoginForm');
Route::post('/login','Auth\LoginController@login')->name('login');



//UserRegister
Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/register','Auth\RegisterController@register')->name('register');

//Logout
Route::post('/logout','Auth\LoginController@logout')->name('logout');

//ForgotPassword
Route::get('/password/email','Auth\ForgotPasswordController@showLinkRequestForm');
//Static Page
Route::get('/contact',function(){return view('Boot.contact');});
Route::get('/about',function(){return view('Boot.about');});

//Cart
/*Route::get('/cart',function() {
      return view('Boot.cart');
    });*/

    Route::resource('/cart','CartController');


//Add to cart
    Route::get('/cart/add-item/{id}','CartController@addItem')->name('cart-additem');

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
        Route::get('dashboard', function(){return view('Vendor.index');
      })->name('seller.home');
//Product Route
        Route::get('/addproduct','Seller\ProductController@index');
        Route::post('/addproduct','Seller\ProductController@store');
//ProductSKu
        Route::get('/addSKU','Seller\ProductSKUController@index');
        Route::post('/addSKU','Seller\ProductSKUController@store');

//Product Image
        Route::get('/addImage','Seller\ProductImageController@index')->name('add-image');
        Route::post('/storeImage','Seller\ProductImageController@store');
//Add Category
        Route::get('/addCategory','Seller\CategoryController@index')->name('add-category');
        Route::get('/showCategory','Seller\CategoryController@show')->name('show-category');
        Route::post('/storeCategory','Seller\CategoryController@store');

//Add Brand
        Route::get('/addBrand','Seller\BrandController@index')->name('add-brand');
        Route::post('/storeBrand','Seller\BrandController@store');





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

//footer Subscribe Form
Route::post('/subscribers','SubscribersController@store');

//footer About Us
Route::get('/about_us',function(){return view('Boot.static_pages.about_us');});

//footer Contact Us
Route::get('/contact_us',function(){return view('Boot.static_pages.contact_us');});

//footer Privacy Policy
Route::get('/privacy_policy',function(){return view('Boot.static_pages.privacy_policy');});

//footer Return Policy
Route::get('/return_policy',function(){return view('Boot.static_pages.return_policy');});

//footer Shipping Policy
Route::get('/shipping_policy',function(){return view('Boot.static_pages.shipping_policy');});

//footer Terms of Use
Route::get('/terms_and _condition',function(){return view('Boot.static_pages.terms_and_condition');});

Route::get('/map',function(){return view('Boot.store');});
