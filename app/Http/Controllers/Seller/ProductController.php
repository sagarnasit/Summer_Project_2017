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
	            return view('Vendor.productForm');
	    }

      	public function store(Request $request){

      		$product = new ProductMaster();
      		$product->product_name = $request['name'];
      		$product->description=$request['description'];
      		$product->save();
      		$request->session()->flash('status', 'Added successfuly!');
      		return view('Vendor.productForm');

      	}
}
