<?php

namespace App\Http\Controllers\seller;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('Vendor.product.addbrand',compact('brands'));
    }


    public function store(Request $request)
    {
     $bnd_name=$request['brandname'];
     $brand_name=Brand::where('brand_name',$bnd_name)->value('brand_name');

     if($brand_name==null) {
         $brand = new Brand();
         $brand->brand_name=$request['brandname'];
         $brand->save();

         flash('Brand Inserted....');
         return view('Vendor.product.addbrand');

     }
     else
     {
         flash('Brand Already Exist....');
         return view('Vendor.product.addbrand');

     }

    }
}
