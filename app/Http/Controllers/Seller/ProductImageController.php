<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
Use App\ProductMaster;
use App\Http\Controllers\Controller;

class ProductImageController extends Controller
{
    
    public function index(){
    	$products = ProductMaster::select(['product_id','product_name'])->get();
    	
    	return view('Vendor.product.productImageForm', compact(['products']));
    }

    public function store(Request $request){
    	return $request;
    }
}
