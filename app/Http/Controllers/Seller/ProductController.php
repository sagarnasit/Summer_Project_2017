<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;
use App\Brand;
use App\Category;
use App\ProductMaster;

class ProductController extends Controller
{           
            
      	public function index(){

                 $brands=Brand::all(); 
                 $categories=Category::all();    
      	     return view('Vendor.product.productForm',compact(['brands','categories']));
      	}

      	public function store(Request $request){

      		$product = new ProductMaster();
                  $categories=Category::all();
      		$product->product_name = $request['name'];
                  $product->brand_id=$request['brandid'];
                  $product->category_id=$request['categoryid'];
                  $product->description=$request['description'];
      		$product->save();
      		
                  $brands=Brand::all();
      		flash('<b>Product Inserted...!</b>');
      		return view('Vendor.product.productForm',compact(['brands','categories']));

      	}
}
