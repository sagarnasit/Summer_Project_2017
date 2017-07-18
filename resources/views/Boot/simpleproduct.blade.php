@extends('Boot.master')

@section('body')

    <section class="cart-content paira-animation-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center margin-bottom-40">
                    <div class="page-header">
                        <h1 class="text-uppercase">Product</h1>
                        <hr>
                    </div>
                </div>
                <div class="col-md-12 margin-bottom-40">

                    <div class="cart-item-list">
                        {{--Image part--}}
                        <div style="float:left; width:40%">
                           <ul class="list-unstyled">
                                <li>
                                    <div class="col-md-20 paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s">
                                        @foreach($products as $product)
                                            <img class="img-responsive" src="{{--images/best_girl.jpg--}}{{url('images',$product->images->image)}}">
                                        @endforeach
                                    </div>
                                </li>
                           </ul>
                        </div>
                        {{--Other part--}}
                        <div style="float:right; width:50%">

                             <div class="col-md-8 margin-top-20">
                                        @foreach($products as $product)
                                        <h1 class="margin-top-20 margin-bottom-20 font-bold"><span class="money font-size-48 color-scheme-3"> {{ $product->product->product_name}}</span></h1>

                                        <h4  class="margin-bottom-20"><span class="money font-bold">Rs.{{$product->price}}</span></h4>
                                        @endforeach

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <h4>Size</h4>
                                                <select name="sizeid" id="" class="form-control">
                                                    <option class="form-control" value="null">size </option>
                                                    @foreach($sizes as $size)

                                                        <option class="form-control" value='{{ $size->size_id }}'>
                                                            {{ $size->size}}


                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br><br><br><br>

                                        <h4>Color</h4>
                                        <div class="form-group">
                                            <div class="col-md-6">

                                                <select name="sizeid" id="" class="form-control">
                                                    <option class="form-control" value="null"> Color</option>
                                                    @foreach($colors as $color)
                                                        <option class="form-control" value='{{ $color->color_id }}'>
                                                            {{ $color->color_name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <br><br><br><br><br>

                                 <div>
                                     @foreach($products as $p)
                                     <a  style="float:left; width:100%" class="btn btn-default " href="{{route('cart-additem',$p->product_id)}}"  class="btn btn-default font-color-black ">Add TO Cart</a>
                                     @endforeach
                                 </div>

                                    </div>


                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>



@endsection