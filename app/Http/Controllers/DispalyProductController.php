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
        $products=ProductDetail::distinct('color_id')->get();
        $image=ProductImage::all();
        $product_detail=ProductMaster::distinct();

        // $brands=Brand::all();
        // $categories=Category::all();

        $view=View::make('Boot.index',compact(['products','image','product_detail']));
       /* $view->nest('Boot.layouts.nav',compact('brands','categories'));*/

        return $view;

    }
}
