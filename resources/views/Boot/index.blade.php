@extends('Boot.master')

@section('title')
    <title>Home</title>
@stop
@section('css')
  <style type="text/css">
    .photo{
      height: 350px;
      width: 500px;
      overflow: hidden;
    }
  </style>
@stop
@section('body')
    <section class="main-slider">
        <!--=================== Camera Slider ===================-->
        <div class="paira-camera-slider paira-animation-container">
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-1.jpg">
                <div class="slider-con">
                    <h1 class=" text-uppercase paira-animation" data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">So<span class="font-color-orange">me</span></h1>
                    <h3 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange">Foot</span>Wear</h3>
                    <h3 class="paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.9s">Collection</h3>
                    <a class="btn btn-success text-uppercase paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.11s" href="#">Collect now</a>
                </div>
            </div>
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-2.jpg">
                <div class="slider-con1">
                    <h1 class="text-uppercase paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">Game</h1>
                    <h2 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange"> Shoe</span> For all</h2>
                    <h2 class="paira-animation" data-paira-animation="fadeInRight" data-paira-animation-delay="0.9s">Collection</h2>
                    <a class="btn btn-success text-uppercase paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.11s" href="#">Collect now</a>
                </div>
            </div>
            <div data-src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-3.jpg">
                <div class="slider-con">
                    <h1 class=" text-uppercase paira-animation" data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">Running</h1>
                    <h3 class="paira-animation" data-paira-animation="fadeInLeft" data-paira-animation-delay="0.7s"><span class="font-color-orange">With</span> Footwear</h3>
                    <a class="btn btn-success paira-animation text-uppercase" data-paira-animation="fadeInUp" data-paira-animation-delay="0.9s" href="#">Collect now</a>
                </div>
            </div>
        </div>
    </section>



    <!--=================== Top Selling Product Section ===================-->
    <section class="top-seller text-center padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1 class="text-uppercase">Best Seller</h1>
                        <hr>
                    </div>
                </div>
                <div class="product-seller">
                    <div class="paira-related-product related-product">
                        @foreach($products as $product)
                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    {{--assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-1.jpg--}}
                                    {{--{{url('images',$shirt->image)}}"--}}

                                    <img src="{{url('images',$product->productdetails[0]->images->image)}}" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive photo">
                                </a>
                            </div>
                            <div class="product-price">
                                <del><span class="money font-color-orange margin-right-10">Rs. {{$product->productdetails[0]->mrp}}</span></del>
                                <span class="money">Rs. {{$product->productdetails[0]->price}}</span>
                            </div>
                            {{--<div class="product-new font-italic color-scheme-3"><span>New</span></div>
                            <div class="product-sale font-italic color-scheme-3"><span>Sale</span></div>--}}
                            <h4 class="color-scheme-3"> {{$product->productdetails[0]->product->product_name}}</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">
                                    <i class=""></i>
                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""><a href="{{route('cart-additem',$product->productdetails[0]->product_id)}}" class=" text-uppercase color-scheme-3 hover-add-cart"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i><span>Add to cart</span> </a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="related-product-btn">
                        <button class="paira-related-product-left pull-left paira-animation"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.3s"><a><img src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-pre.png" alt="" class="paira-product-image img-responsive"></a></button>
                        <button class="paira-related-product-right pull-right paira-animation"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.3s"><a><img src="assets/images/slider/themetidy-paira-framework-boot-responsive-html-template-slider-next.png" alt="" class="paira-product-image img-responsive"></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Recent Products--}}
    <section class="recent-product text-center padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1 class="text-uppercase">Recent Products</h1>
                        <hr>
                    </div>
                </div>
                <div class="product-widget">
                    @foreach($recentProduct as $product)
                    <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-100 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">

                        <div class="paira-product product position">
                            <div class="block-image position">
                                <a href="#">
                                    <div class="background-overlay"></div>
                                    <img src="{{url('images',$product->productdetails[0]->images->image)}}" alt="themetidy-paira-framework-foot-responsive-html-template-product-1" class="paira-product-image img-responsive photo">
                            </div>
                            <div class="product-price">
                                <del><span class="money font-color-orange margin-right-10">Rs. {{$product->productdetails[0]->mrp}}</span></del>
                                <span class="money">Rs. {{$product->productdetails[0]->price}}</span>
                            </div>
                
                            <h4 class="color-scheme-3"> {{$product->productdetails[0]->product->product_name}}</h4>
                            <div class="product-hover text-uppercase">
                                <div class="paira-rating-con product-rating padding-bottom-40 color-scheme-3">

                                </div>
                                <div class="paira-product-cart-con product-button text-center">
                                    <ul class="list-inline">
                                        <li class=""> <a href="{{route('cart-additem',$product->productdetails[0]->product_id)}}" class=" text-uppercase color-scheme-3"><i class="fa fa-shopping-cart fa-2x margin-right-5"></i> Add to cart</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--=================== Brand Logo Section ===================-->
    <section class="brand margin-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="paira-brand">
                        <ul class="list-inline">
                            @foreach($brands as $brand)
                            <li><a href="{{route('search-via-brand',$brand->brand_id)}}" class="text-uppercase color-scheme-3">{{--<i class="fa  fa-shield font-color-orange margin-right-10 fa-5x pull-left"></i>--}}<p class="font-size-50 pull-left">{{$brand->brand_name}}</p></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
