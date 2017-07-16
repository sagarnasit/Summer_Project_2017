<?php

namespace App\Http\Controllers\Seller;

use App\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categorys = Category::all();
        return view('Vendor.product.addcategory',compact('categorys'));
    }

    public function show($id)
    {

        $products=ProductDetail::where('category_id',$id)->value('product_name');
        return view('Boot.layouts.nav',compact('products'));
    }

    public function store(Request $request)
    {
        $cat_name=$request['categoryname'];
        $category_name = Category::where('category_name',$cat_name)->value('category_name');
        if($category_name==null)
        {
            $category = new Category();
            $category->category_name = $request['categoryname'];
            $category->save();

            flash('Category INserted');
            return view('Vendor.product.addcategory');
        }
        else
        {
            flash('Category Already Exist');
            return view('Vendor.product.addcategory');
        }
    }
}
