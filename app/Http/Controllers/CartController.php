<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\ProductDetail;
use App\ProductMaster;
use App\ProductImage;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cartItems = Cart::content();
        //$quantity=ProductDetail::where('product_id',$)->value('quantity');
        return view('Boot.cart', compact('cartItems'));
    }



    public function addItem($id)
    {
        $product=ProductDetail::find($id);

        $product_name=ProductMaster::where('product_id',$id)->value('product_name');
        $image=ProductImage::where('product_id',$id)->value('image');
        Cart::add(['id'=>$id,'name'=>$product_name,'qty' => 1,'price'=>$product->price,'image'=>$product->images->image]);
        return back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Cart::update($id,['qty'=>$request->qty]);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cart::remove($id);
        return back();
    }
}
