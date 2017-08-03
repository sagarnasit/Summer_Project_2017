@extends('Boot.master')
@section('title')
    <title>Cart</title>
@stop
@section('body')
        <section class="cart-content paira-animation-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center margin-bottom-40">
                        <div class="page-header">
                            <h1 class="text-uppercase">My cart</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-12 margin-bottom-40">
                        <a href="/product" class="pull-left margin-bottom-40 cart-continue-shopping"><i class="fa fa-long-arrow-left margin-right-10"></i><strong class="font-color-orange text-uppercase">Continue Shopping</strong></a>
                        <div class="cart-item-list">
                            <h6 class="text-uppercase panel-title cart-title">Product Lists</h6>
                       @foreach($cartItems as $cartItem)

                            <ul class="list-unstyled">
                                <li>
                                    <div class="col-md-4 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">
                                        <img class="img-responsive" src="{{url('images',$cartItem->image)}}" alt="is not getting">
                                    </div>
                                    <div class="col-md-8 margin-top-20">
                                       {{-- <a href="#" class="margin-top-10"><strong class="font-size-18"></strong></a>--}}
                                        {{--<a href="{{route('cart.destroy',$cartItem->id)}}" class="pull-right"><i class="fa  fa-times-circle fa-2x"></i></a>--}}
                                         <h4 class="margin-top-20 margin-bottom-20"><span class="money font-size-16 color-scheme-3"> {{ $cartItem->name}}</span></h4>
                                        <h4  class="margin-bottom-20 pull-right"><span class="money font-bold">Rs. {{$cartItem->price}}</span></h4>
                                        <div>
                                        <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input  class="btn btn-default pull-right"  type="submit" value="Delete">
                                        </form>
                                          {{-- <button class="pull-left btn-success btn" data-direction="down"><i class="fa fa-angle-down"></i></button>--}}
                                          {{--  <form action="{{route('cart.update',$cartItem->rowId)}}" method="">
                                                <input type="number" name="qty"  max="10" min="1" value="{{$cartItem->qty}}" class="pull-left text-center product_quantity_text">
                                                <input class="btn btn-default pull-right" type="submit"  value="Update">
                                            </form>--}}
                                            {!! Form::open(['route'=>['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                                            {{csrf_field()}}
                                               <input name="qty" class="pull-left text-center product_quantity_text" type="number" max="10" min="1" value="{{$cartItem->qty}}" >
                                               <input class="btn btn-default pull-right" type="submit"  value="Update">
                                            {!! Form::close() !!}
                                            {{--<form action="['route'=>['cart.update',$cartItem->rowId]]" method="ANY">
                                                <input name="qty" type="number" max="10" min="1" class="pull-left text-center product_quantity_text" value="{{$cartItem->qty}}" >
                                                <input class="btn btn-default pull-right" type="submit" value="Update">
                                            </form>--}}
                                        </div>

                                           {{-- <button class="btn-success btn pull-left" data-direction="up"><i class="fa fa-angle-up"></i></button>--}}

                                        {{--<a href="#" class="btn btn-default pull-left color-scheme-1 margin-left-10 margin-right-10 cart-update"><i class="fa fa-pencil"></i></a>--}}
                                    </div>
                                </li>

                            </ul>
                               @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 margin-bottom-40">
                        <figure class="margin-bottom-30">
                            <figcaption><h4 class="panel-heading font-bold">Sub Total</h4></figcaption>
                            <div class="cart-sub-total">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <h2 class="margin-top-50 margin-bottom-20"><span class="money font-bold font-bold font-color-orange font-size-50">Rs. {{Cart::total()}}</span></h2>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    {{--<textarea id="note" name="note" class="margin-top-10 margin-bottom-10 form-control" placeholder="Special instructions..."></textarea>--}}
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    {{--<input type="submit" id="checkout" class="btn btn-success btn-lg btn-block text-uppercase margin-top-50" name="checkout" value="Proceed To Checkout">--}}
                                    <a href="/review"><button type="button" id="checkout" class="btn btn-success btn-lg btn-block text-uppercase margin-top-50" name="checkout">Proceed To Checkout</button></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    </div>
                    <aside class="col-lg-12 col-md-12 col-sm-12 margin-bottom-75">
                        <figure>
                            <div class="cart-shipping-calculate">
                                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <a href="/product" >
                                    <button  type="button" class="btn btn-default color-scheme-1 btn-lg btn-block text-uppercase">Continue Shopping</button>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                </div>
                            </div>
                        </figure>
                    </aside>
                </div>
            </div>
        </section>

@stop
