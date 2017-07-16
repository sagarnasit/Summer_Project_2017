@extends('Boot.master')
@section('title')
    <title>Search</title>
@stop
@section('body')
    <section class="cart-content paira-animation-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center margin-bottom-40">
                    <div class="page-header">
                        <h1 class="text-uppercase">Products</h1>
                        <hr>
                    </div>
                </div>
                <div class="col-md-12 margin-bottom-40">

                    <div class="cart-item-list">

                        <h3>Total {{$products->total()}} Products founds</h3><br>
                        @foreach($products as $p)
                            <ul class="list-unstyled">
                                <li>
                                    <div class="col-md-4 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">
                                        <img class="img-responsive" src="{{url('images',$p->images->image)}}" alt="">
                                    </div>
                                    <div class="col-md-8 margin-top-20">
                                        <h4 class="margin-top-20 margin-bottom-20"><span class="money font-size-16 color-scheme-3"> {{ $p->product->product_name}}</span></h4>
                                        <h4  class="margin-bottom-20"><span class="money font-bold">Rs. {{$p->productprice}}</span></h4>
                                        <a href="{{route('cart-additem',$p->product_id)}}"  class="btn btn-default font-color-black ">Add TO Cart</a>

                                    </div>
                                </li>

                            </ul>

                        @endforeach

                    </div>
                    {{$products->links() }}
                </div>
            </div>
        </div>
    </section>



@endsection
