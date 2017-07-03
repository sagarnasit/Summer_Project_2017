<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductMaster;
use App\ColorMaster;
use App\SizeMaster;
use App\ProductDetail;


class ProductSKUController extends Controller
{
    public function index(){

    	flash('<b>Add.............</b>');
    	$products = ProductMaster::select(['product_id','product_name'])->get();
    	$colors=ColorMaster::all();
    	$sizes=SizeMaster::all();
    	//return $products;
    	$productdetails=null;

    	return view('Vendor.product.productskuform',compact(['products','colors','sizes','productdetails']));
    }

    public function Store(Request $request){
    	//validation
    	$this->validate($request,[

    		'productid'=> 'required',
    		'colorid' => 'required',
    		'sizeid' => 'required',
    		'mrp' => 'required|numeric',
    		'price' => 'required|numeric',
    		'qty' => 'required|numeric',
    		'minqty' => 'required|numeric',

    	]);
    	 // dd($request);
    	//insert query
    	$pc = new ProductDetail();
    	$pc->product_id= $request['productid'];
    	$pc->color_id= $request['colorid'];
    	$pc->size_id= $request['sizeid'];
    	$pc->mrp= $request['mrp'];
    	$pc->price= $request['price'];
    	$pc->qty= $request['qty'];
    	$pc->minqty= $request['minqty'];
    	$pc->status=1;
    	$pc->save();

    	//flash message
    	flash('<b>SKU Added...!</b>');

    	//get Product detail
    	$products = ProductMaster::select(['product_id','product_name'])->get();
    	$colors=ColorMaster::all();
    	$sizes=SizeMaster::all();
    	$productdetails=ProductDetail::all();

    	return view('Vendor.product.productskuform',compact(['products','colors','sizes','productdetails']));
    }

   
}
