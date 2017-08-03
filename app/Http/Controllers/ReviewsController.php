<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductDetail;
use App\ProductMaster;
use App\ProductImage;
use App\User;
use Cart;
use Auth;

class ReviewsController extends Controller
{
	public function cart()
	{

		$cartItems = Cart::content();
		$users = User::find(Auth::user()->id)->addresses->first();
        //$quantity=ProductDetail::where('product_id',$)->value('quantity');
        // return $cartItems;
		return view('Boot.review_order', compact('cartItems','users'));
	}
}
