<?php

namespace App\Http\Controllers\Seller;


use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Seller\ProductSKURequest;
use App\Http\Controllers\Controller;
use App\ProductMaster;
use App\ColorMaster;
use App\SizeMaster;
use App\ProductDetail;
use App\Category;
use App\Exceptions\CustomeDuplicateException;


class ProductSKUController extends Controller
{
    public function index(){

    	// flash('<b>Add.............</b>');
    	$products = ProductMaster::select(['product_id','product_name'])->get();
    	$colors=ColorMaster::all();
    	$sizes=SizeMaster::all();
    	
    	//return $products;
    	$productdetails=null;

    	return view('Vendor.product.productskuform',compact(['products','colors','sizes','productdetails']));
    }




    public function store(ProductSKURequest $request){
    	
    	//insert query

            //we check only product_id is duplicate. but size id and color_id is not duplicate.

          // $pid=$request['productid'];
          // $produc_id=ProductDetail::where('product_id',$pid)->value('product_id');
          // if($produc_id==null)
          // {

        try{
            $pid=$request['productid'];
            $cid=$request['colorid'];
            $sid=$request['sizeid'];

            $found=ProductDetail::where('product_id',$pid)
                ->where('color_id',$cid)
                ->where('size_id',$sid)
                ->get();
            
                 // return ($found[0]->product_id);
           if(isset($found[0]->product_id)){
                throw new CustomeDuplicateException("Error Processing Request", 1);
            
           }
          


            $pc = new ProductDetail();
            $pc->product_id= $request['productid'];
            $pc->color_id= $request['colorid'];
            $pc->size_id= $request['sizeid'];
            // $pc->category_id=$request['categoryid'];
            // $pc->brand_id=$request['brandid'];
            $pc->mrp= $request['mrp'];
            $pc->price= $request['price'];
            $pc->quantity= $request['qty'];
            $pc->minquantity= $request['minqty'];
            $pc->status=1;
            $pc->save();

            //flash message
            flash('<b>SKU Added...!</b>');


            //get Product detail
            $products = ProductMaster::select(['product_id','product_name'])->get();
            $colors=ColorMaster::all();
            $sizes=SizeMaster::all();
            $productdetails=ProductDetail::where('product_id',$request['productid'])->get();
           

            return view('Vendor.product.productskuform',compact(['products','colors','sizes','productdetails']));
        // }
        // else
        // {
        //     flash("<b>SKU Already Available...!</b>");
        //     return back()->withInput();
        // }
        }
        catch (CustomeDuplicateException $e){

            flash("<b>SKU Already Available...!</b>");
            return back()->withInput();

        }

    	
    }

   
}
