@extends('Boot.master')
@section('title')
<title>Review Order</title>
@stop
@section('body')
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center margin-bottom-40">
        <div class="page-header">
          <h1 class="text-uppercase">Review Order</h1>
          <hr>
        </div>
      </div>
    </div>
    <div class="row">
      <table class="table   table-bordered='0'">
        <tr bgcolor="#000000">
            <th></th>
          <th class="col-md-8 text-center"><h4><font color="#ffffff">Item Details</font></h4></th>
          <th class="col-md-2 text-center"><h4><font color="#ffffff">Quantity</font></h4></th>
          <th class="col-md-2 text-center"><h4><font color="#ffffff">Total</font></h4></th>
        </tr>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>
                <div class="">
                    <img src="images/{{ $cartItem->image }}" width="150px" />
                </div>
            </td>
          <td class="col-md-8 text-center">{{ $cartItem->name}}</td>
          <td class="col-md-2 text-center">{{$cartItem->qty}}</td>
          <td class="col-md-2 text-center">Rs. {{$cartItem->price}}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-40">
      <figure class="margin-bottom-30">
        <figcaption>
          <h4 class="panel-heading font-bold">Cart subtotal ({{Cart::count()}} items)</h4>
        </figcaption>
        <div class="cart-sub-total">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <h2 class="margin-top-50 margin-bottom-20">
              <span class="money font-bold font-bold font-color-orange font-size-50">Rs. {{Cart::total()}}
              </span>
            </h2>
          </div>
        </div>
      </figure>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <h2>
          Deliver to :
        </h2>
        <h4>
          {{Auth::user()->name}}
        </h4>
        <h5>
          {{  $user->address }}, {{ $user->city }}, {{ $user->state }}, {{ $user->pincode }}
        </h5>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <a href="#" class="btn btn-success btn-lg btn-block text-uppercase margin-top-50">Continue
        </a>
      </div>
    </div>
    <br>
    <br>
  </div>
</section>
@stop
