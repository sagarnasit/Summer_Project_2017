<header>
      <section class="header-top">
            <div class="container-fluid">
                  <div class="pull-right user-option">
                        <ul class="list-inline">
                              <li class="dropdown cart-menu-body paira-cart-menu-body margin-clear">
                                    <a href="/cart" class="padding-bottom-15"><i
                                                  class="fa fa-shopping-cart fa-2x color-scheme-2"></i><span
                                                  class="paira-cart-item-count">{{Cart::count()}}</span><span
                                                  class="for-mobile-tab"><span
                                                        class="paira-cart-total-price"><span
                                                              class="money font-bold"
                                                              data-currency-usd="$0.00">Rs. {{Cart::total()}}</span></span></span></a>


                              </li>

                        </ul>


                  </div>

                  @if (Auth::guard('web')->guest())
                        <div class="pull-right user-account">
                              <ul class="list-inline">
                                    <li class="btn-group">
                                          <a type="button" href="/login" class="dropdown-toggle font-bold">
                                                <span class="selected text-uppercase" data-id="flag-USD"><span
                                                              class="usd-fl">Login</span></span>
                                          </a>|
                                          <a type="button" href="/register" class="dropdown-toggle font-bold">
                                                <span class="selected text-uppercase" data-id="flag-USD"><span
                                                              class="usd-fl">SignUp</span></span>
                                          </a>

                                    </li>
                              </ul>
                        </div>

                  @else
                        <div class="pull-right user-account">
                              <ul class="list-inline">
                                    <li class="btn-group">
                                          <a type="button" href="/logout" class="dropdown-toggle font-bold"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                                <span class="selected text-uppercase" data-id="flag-USD"><span
                                                              class="usd-fl">logout</span></span>
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                          </form>


                                    </li>
                              </ul>
                        </div>
                  @endif




            </div>
      </section>
      @include('Boot.layouts.nav')
</header>
<div class="">
      <hr class="myHr">
</div>