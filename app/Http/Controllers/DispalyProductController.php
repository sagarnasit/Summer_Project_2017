<?php

namespace App\Http\Controllers;

use App\ColorMaster;
use App\ProductDetail;
use App\ProductMaster;
use App\ProductImage;
use App\Brand;
use App\Category;
use App\SizeMaster;
use View;
use DB;
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
        $products=ProductMaster::latest()->take(10)->get();
        $recentProduct=ProductMaster::take(2)->get();
        $image=ProductImage::latest()->take(10)->get();
        $product_detail=ProductMaster::latest()->take(10)->get();
        $brands=Brand::latest()->take(4)->get();

        $view=View::make('Boot.index',compact(['products','image','product_detail','brands','recentProduct']));


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
        // dd($product);
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

    public function  simpleproduct($id)
    {
        $products=ProductDetail::where('product_id',$id)->get();
        //$images=DB::table('product_images')->where('product_id',$id)->join('product_details','product_images.img.id','=','product_details.img.id')->value('image');
        $sizes=DB::table('size_masters')->where('product_id',$id)->join('product_details','size_masters.size_id','=','product_details.size_id')->get();
        $colors=DB::table('color_masters')->where('product_id',$id)->join('product_details','color_masters.color_id','=','product_details.color_id')->get();

        return view('Boot.simpleproduct',compact('products','sizes','colors'));
    }
}
