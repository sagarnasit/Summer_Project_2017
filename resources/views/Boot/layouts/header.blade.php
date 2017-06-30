<header>
      <section class="header-top">
            <div class="container-fluid">

                  <div class="pull-right user-option">
                        <ul class="list-inline">
                              @if (!Auth::guard('web_seller')->guest())
                                    <li class="dropdown cart-menu-body paira-cart-menu-body margin-clear">
                                          <a href="cart.html" class="padding-bottom-15"><i
                                                        class="fa fa-shopping-cart fa-2x color-scheme-2"></i><span
                                                        class="paira-cart-item-count">0</span><span
                                                        class="for-mobile-tab"><span
                                                              class="paira-cart-total-price"><span
                                                                    class="money font-bold"
                                                                    data-currency-usd="$0.00">$500.00</span></span></span></a>
                                          <div class="paira-cartNotEmpty cart-not-empty" style="display: none;">
                                                <ul class="dropdown-menu margin-top-5 padding-bottom-15">
                                                      <li class="text-center padding-top-5">
                                                            <strong class="text-uppercase letter-spacing-2">Recently
                                                                  added 3
                                                                  Items</strong>
                                                      </li>
                                                      <hr class="divider-small">

                                                      <li class="padding-right-15 padding-left-15">
                                                            <strong class="text-uppercase"><span
                                                                          class="pull-left">Total:</span> <span
                                                                          class="paira-cart-total-price pull-right"><span
                                                                                class="money"
                                                                                data-currency-usd="$300.00">$300.00</span></span></strong>
                                                      </li>
                                                      <li class="cart-menu-buttons pull-left margin-top-20">
                                                            <a href="cart.html"
                                                               class="btn btn-success text-capitalize pull-left">View
                                                                  Cart</a>
                                                            <a href="#"
                                                               class="btn btn-success text-capitalize pull-right">Checkout</a>
                                                      </li>
                                                </ul>
                                          </div>

                                    </li>
                              @endif
                        </ul>
                  </div>
                  @if (Auth::guard()->guest())
                        <div class="pull-right user-account">
                              <ul class="list-inline">
                                    <li class="btn-group">
                                          <a type="button" href="/login" class="dropdown-toggle font-bold">
                                                <span class="selected text-uppercase" data-id="flag-USD"><span
                                                              class="usd-fl">Login</span></span>
                                          </a>|
                                          <a type="button" href="/register" class="dropdown-toggle font-bold"
                                             >
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