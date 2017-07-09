<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('Vendor.product.addcategory');
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
