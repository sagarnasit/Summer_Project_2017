<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;
use App\Brand;
use App\ProductMaster;

class ProductController extends Controller
{           
            
      	public function index(){

                 $brands=Brand::all();      
      	     return view('Vendor.product.productForm',compact(['brands']));
      	}

      	public function store(Request $request){

      		$product = new ProductMaster();
      		$product->product_name = $request['name'];
                  $product->description=$request['description'];
      		$product->save();
      		
                  $brands=Brand::all();
      		flash('<b>Product Inserted...!</b>');
      		return view('Vendor.product.productForm',compact(['brands']));

      	}
}
