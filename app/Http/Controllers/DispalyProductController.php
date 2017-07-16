<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use App\ProductMaster;
use App\ProductImage;
use App\Brand;
use App\Category;
use View;
use App\AddCatBrandController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DispalyProductController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $products=ProductMaster::all();
        $image=ProductImage::all();
        $product_detail=ProductMaster::distinct();

        $view=View::make('Boot.index',compact(['products','image','product_detail']));


        return $view;

    }

    public function showall()
    {
        $product=ProductDetail::latest()->paginate(4);
        return view('Boot.products',compact('product'));
    }


    public function searchall(Request $request)
    {

        $s=$request->input('s');

        $product= ProductMaster::latest()->where('product_name','like', '%' .$s. '%')->paginate(4);
        return view('Boot.searchProducts',compact('product','s'));
    }


    public function searchviabrand($id)
    {
        $products=ProductDetail::where('brand_id',$id)->paginate(10);
        return view('Boot.serchvia',compact('products'));
    }

    public function searchviacat($id)
    {
        $products=ProductDetail::where('category_id',$id)->paginate(10);
        return view('Boot.serchviacat',compact('products'));
    }

    public function  simpleproduct()
    {

        return view('Boot.simpleproduct');
    }
}
