<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

use App\ProductMaster;

class ProductController extends Controller
{
	    public function index(){

	            return view('Vendor.product.productForm');
	    }

      	public function store(Request $request){

      		$product = new ProductMaster();
      		$product->product_name = $request['name'];
      		$product->description=$request['description'];
      		$product->save();
      		
      		flash('<b>Product Inserted...!</b>');
      		return view('Vendor.product.productForm');

      	}
}
