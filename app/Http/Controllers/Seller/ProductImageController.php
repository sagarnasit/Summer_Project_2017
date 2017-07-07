<?php

namespace App\Http\Controllers\Seller;

use App\ProductDetail;
use DB;
use App\ColorMaster;
use App\ProductImage;
use Illuminate\Http\Request;
Use App\ProductMaster;
use App\Http\Controllers\Controller;



class ProductImageController extends Controller
{
    
    public function index(){
        $colorid=ColorMaster::select(['color_id'])->get();

    	$products = ProductMaster::select(['product_id','product_name'])->get();
    	
    	return view('Vendor.product.productImageForm', compact(['products','colorid']));
    }



    public function store(Request $request){


       $formInput=$request->except('image');

       // validate image
      $this->validate($request,[
          'image'=>'image|mimes:png,jpg,jpeg|max:10000'
      ]);




      $image=$request->image;
      $productid=$request->productid;
      $color_id = DB::table('product_details')->where('product_id',$productid)->value('color_id');

      $imageName = $image->getClientOriginalName();

        //move image into public\images folder
           $image->move('images', $imageName);
           
           $formInput['image'] = $imageName;


           $data = ['image' => $imageName, 'product_id' => $productid, 'color_id' => $color_id];
           DB::table('product_images')->insert($data);
           flash('<b>Images Added...!</b>');


      return redirect()->route('add-image');
    }
}
