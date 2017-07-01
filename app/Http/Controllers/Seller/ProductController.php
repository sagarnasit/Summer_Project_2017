<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
      public function index(){
            return view('Vendor.productForm');
      }

      public function store(Request $request){


             $ar = $request->input('name');
                  return $ar[1];
      }
}
