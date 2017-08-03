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
                                                <ul role="menu" class="dropdown-menu paira-dropdown-menu list-unstyled animated fadeIn">
                                                      @foreach($brands as $brand)
                                                        <li><a href="{{route('search-via-brand',$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                                      @endforeach

                                                </ul>

                                          </li>
                                          <li class="dropdown paira-dropdown">
                                            <a href="">Catagory <i class="paira-angle-down angle-down fa fa-angle-down"></i></a>
                                            <ul role="menu" class="dropdown-menu paira-dropdown-menu list-unstyled text-capitalize animated fadeIn">

                                              @foreach($categories as $category)
                                               <li><a href="{{route('search-via-cat',$category->category_id)}}">{{$category->category_name}}</a></li>
                                               @endforeach

                                            </ul>
                                          </li>

                                          <!--=================== Grid Mega Menu ===================-->
                                        
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
