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
          <th class="col-md-8 text-center"><h4><font color="#ffffff">Item Details</font></h4></th>
          <th class="col-md-2 text-center"><h4><font color="#ffffff">Quantity</font></h4></th>
          <th class="col-md-2 text-center"><h4><font color="#ffffff">Total</font></h4></th>
        </tr>
        @foreach($cartItems as $cartItem)
        <tr>
          <td class="col-md-8 text-center">{{ $cartItem->name}}</td>
          <td class="col-md-2 text-center">{{$cartItem->qty}}</td>
          <td class="col-md-2 text-center">Rs. {{$cartItem->price}}</td>
        </tr>
<<<<<<< HEAD
      </tbody>
    </table>
  <div class="payment-options">
    <span>
       <input type="radio" name="pay" value="COD" checked="checked">COD
       <input type="submit" name="" value="COD">
     </span>
    <span>
      <input type="radio" name="pay" value="gateway">GATEWAY
      <input type="submit" name="" value="GATEWAY">
    </span>
    <span><input type="submit" name="" value="Continue"></span>
  </div>
=======
        @endforeach
      </table>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-40">
      <figure class="margin-bottom-30">
        <figcaption>
          <h4 class="panel-heading font-bold">Sub Total ({{Cart::count()}} items)</h4>
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
    <div class="">
      <hr class="myHr">
    </div>
    <div class="row">
      <h4>Shipping Address</h4>
    </div>
>>>>>>> 3a6ee18143101f38a7e50901bacfccd18c299e77
  </div>
</section>
@stop
