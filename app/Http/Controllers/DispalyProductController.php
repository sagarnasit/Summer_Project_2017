<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use App\ProductMaster;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DispalyProductController extends Controller
{
    public function index()
    {
        $products=ProductDetail::all();
        $image=ProductImage::all();
        $product_detail=ProductMaster::all();

      /* // $products_id=ProductDetail::all('product_id');
        $product_id=$products['product_id'];
        $product_name=ProductMaster::where('product_id',$product_id)->value('product_name');

        $image_id=ProductImage::where('product_id',$product_id)->value('img_id');
        $price=ProductDetail::where('product_id',$product_id)->value('price');

        $products=['product_id','product_name','image_id','price'];*/

        return view('Boot.index',compact(['products','image','product_detail']));



    }
}
