<?php

use App\ProductMaster;



//Home Page
Route::get('/','DispalyProductController@index');

//show products
Route::get('/product','DispalyProductController@showall');

//searching
Route::get('/search','DispalyProductController@searchall');

//searching_via
Route::get('/searchviabrand/{id}','DispalyProductController@searchviabrand')->name('search-via-brand');
Route::get('/searchviacat/{id}','DispalyProductController@searchviacat')->name('search-via-cat');

//simple_product_display
Route::get('/simpleproduct/{id}','DispalyProductController@simpleproduct')->name('simple-product');

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

//Add color
        Route::get('/addColor','Seller\ColorController@index')->name('add-color');
        Route::post('/storeColor','Seller\ColorController@store');

//Add Size
        Route::get('/addSize','Seller\SizeController@index')->name('add-size');
        Route::post('/storeSize','Seller\SizeController@store');

        Route::get('/subs', 'Seller\ListController@subs');
        Route::get('/users', 'Seller\ListController@users');

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

//Subscriber Form in footer
Route::post('/subscribers','SubscribersController@store');

//About Us Static Page in footer
Route::get('/about-us',function(){return view('Boot.static_pages.about-us');});

//Contact Us Static Page in footer
Route::get('/contact-us',function(){return view('Boot.static_pages.contact-us');});

//Privacy Policy Static Page in footer
Route::get('/privacy-policy',function(){return view('Boot.static_pages.privacy-policy');});

//Return Policy Static Page in footer
Route::get('/return-policy',function(){return view('Boot.static_pages.return-policy');});

//Shipping Policy Static Page in footer
Route::get('/shipping-policy',function(){return view('Boot.static_pages.shipping-policy');});

//Terms of Use Static Page in footer
Route::get('/terms-and-condition',function(){return view('Boot.static_pages.terms-and-condition');});

//Map in footer
Route::get('/map',function(){return view('Boot.store');});

//Review Order
Route::get('/review','ReviewsController@cart')->middleware('auth');

// User Account Manupulation Link
Route::get('/your-account',function(){return view ('Boot.your-account');})->middleware('auth');

//User Login and Security Link
Route::get('/login-security',function(){return view ('Boot.login-security');})->middleware('auth');

//User Login and Security Update Form Link
Route::post('/login-security-form','Auth\YourAccountController@loginsecurity')->middleware('auth');

//User Addresses Manupulation Link
Route::get('/addresses','Auth\YourAccountController@addresses')->middleware('auth');

//User Addresses Add Link
Route::get('/addresses-add',function(){return view ('Boot.addresses-add');})->middleware('auth');

//User Addresses Add Form Link
Route::post('/addresses-add-form','Auth\YourAccountController@addressesadd')->middleware('auth');

//User Addresses Update Link
Route::get('/addresses-edit/{address}','Auth\YourAccountController@addressesupdate')->middleware('auth');

//User Addresses Delete Link
Route::get('/addresses-delete/{address}','Auth\YourAccountController@addressesdelete')->middleware('auth');

//User Account Update Form Link
Route::post('/addresses-update-form','Auth\YourAccountController@addressesupdateadd')->middleware('auth');
