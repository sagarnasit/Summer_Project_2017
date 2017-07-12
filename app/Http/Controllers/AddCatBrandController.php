<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddCatBrandController extends Controller
{
    public function index()
    {
        $brands=Brand::all();
        $categories=Category::all();

      return view('Boot.layouts.nav',compact('brands','categories'));
    }
}
