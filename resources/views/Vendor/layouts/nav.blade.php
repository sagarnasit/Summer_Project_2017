<nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header">
            <div class="top-left-part">
                  <!-- Logo -->
                  <a class="logo" href="index-2.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                              <!--This is dark logo icon-->
                              <img src="/assets/Vendor/plugins/images/admin-logo.png" alt="home" class="dark-logo"/>
                              <!--This is light logo icon-->
                              <img src="/assets/Vendor/plugins/images/admin-logo-dark.png" alt="home"
                                   class="light-logo"/>
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                    <!--This is dark logo text-->
                    <img src="/assets/Vendor/plugins/images/admin-text.png" alt="home" class="dark-logo"/>
                              <!--This is light logo text-->
                    <img src="/assets/Vendor/plugins/images/admin-text-dark.png" alt="home" class="light-logo"/>
                </span> </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-left pull-left">

                  <li>
                        <a class="profile-pic"  href="#">
                              <i class="fa fa-smile-o" style="font-size: 30px"></i>
                              <b class="hidden-xs">Sagar</b>
                        </a>
                  </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">

                  <li>
                        <a  href=""
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <b>  Logout</b>
                        </a>

                        <form id="logout-form" action="{{ route('seller.logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                        </form>
                  </li>
            </ul>
      </div>
      <style>

      </style>
</nav>
