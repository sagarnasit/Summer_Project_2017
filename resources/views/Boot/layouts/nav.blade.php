<section class="header-bottom padding-top-20 padding-bottom-20">
      <div class="container">
            <div class="row">
                  <!--=================== Logo ===================-->
                  <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href={{url('/')}}><img src="assets/images/logo.jpg" alt="" class="pull-left"></a>
                  </div>
                  <div class="col-md-10 margin-top-5">
                        <!--=================== Main Menu ===================-->
                        <nav class="navbar navbar-default paira-mega-menu mega-menu">
                              <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                    </button>
                              </div>
                              <div id="navbar-collapse" class="navbar-collapse cowellapse">
                                    <ul class="nav navbar-nav font-bold">
                                          <!--=================== Single Menu ===================-->
                                          <li><a href={{url('/')}}>Home</a></li>
                                          <li><a href={{url('/product')}}>Products</a></li>
                                          <!--=================== Classic Menu ===================-->

                                          <li class="dropdown paira-dropdown">
                                                <a href={{url('/')}}>Brand<i class="paira-angle-down angle-down fa fa-angle-down"></i></a>
                                              {{--<ul role="menu" class="dropdown-menu paira-dropdown-menu list-unstyled animated fadeIn">
                                                     @foreach($brands as $brand)
                                                      <li><a href="#">{{$brand->brand_name}}</a></li>
                                                      @endforeach

                                                </ul>--}}
                                          {{--<li> {!! link_to_action('HomeController@show',$latest->category_name,[$latest->category_id]) !!}</li>--}}
                                          </li>
                                          <li class="dropdown paira-dropdown">
                                                <a href="{{url('/')}}">Category<i class="paira-angle-down angle-down fa fa-angle-down"></i></a>

                                          </li>
                                          <!--=================== Grid Mega Menu ===================-->
                                          <li class="dropdown paira-dropdown mega-menu-fw">
                                                <a href="product.html">Shop<i class="paira-angle-down angle-down fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu paira-dropdown-menu list-unstyled padding-bottom-20 font-normal animated fadeIn">
                                                      <li>
                                                            <div class="col-md-3 col-sm-3">
                                                                  <h4 class="mega-menu-in-header">Man</h4>
                                                                  <hr>
                                                                  <ul role="menu" class="mega-menu-in list-unstyled">
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                        <li><a href="#">Walk Shoe</a></li>
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                  </ul>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3">
                                                                  <h4 class="mega-menu-in-header">Woman</h4>
                                                                  <hr>
                                                                  <ul role="menu" class="mega-menu-in list-unstyled">
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                        <li><a href="#">Walk Shoe</a></li>
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                  </ul>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3">
                                                                  <h4 class="mega-menu-in-header">Kid</h4>
                                                                  <hr>
                                                                  <ul role="menu" class="mega-menu-in list-unstyled">
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                        <li><a href="#">Walk Shoe</a></li>
                                                                        <li><a href="#">Converse Shoe</a></li>
                                                                        <li><a href="#">Pie Shoe</a></li>
                                                                        <li><a href="#">Official Shoe</a></li>
                                                                        <li><a href="#">Running Shoe</a></li>
                                                                  </ul>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3">
                                                                  <img class="pull-right img-responsive mega-img" src="assets/images/header/themetidy-paira-framework-boot-responsive-html-template-menu-4.jpg" alt="">
                                                            </div>
                                                      </li>
                                                </ul>
                                          </li>

                                          </ul>
                                    <!--=================== Single Menu ===================-->
                                    <div class="dropdown navbar-form navbar-right navbar-search search-drop-bar margin-top-10">
                                          <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="fa fa-search fa-2x"></i></a>
                                          <ul class="dropdown-menu box paira-animation" id="box" data-paira-animation="fadeInDown" data-paira-animation-delay="0.0s">
                                                <form class="navbar-form" action="/search" method="get">
                                                      <div class="form-group">
                                                            <i class="fa fa-search"></i>
                                                            <input type="text" name="s" class="form-control font-bold font-size-16" placeholder="Search Here" value="{{ isset($s) ? $s : ''}}">
                                                      </div>
                                                </form>
                                                <a class="boxclose" id="close"></a>
                                          </ul>
                                    </div>
                              </div>
                        </nav>
                  </div>
            </div>
      </div>
</section>