<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2017 10:50:12 GMT -->
<head>


 @include('Vendor.layouts.css')

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <!-- ============================================================== -->
    <div id="wrapper">

        @include('Vendor.layouts.nav')
        

        @include('Vendor.layouts.sidebar')
        <!-- End Left Sidebar -->


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard @yield('title')</h4> </div>

                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    @yield('body')
                </div>
                <footer class="footer text-center"> 2017 &copy; Boot.com </footer>
            </div>

            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->

        @include('Vendor.layouts.javascript')
        @yield('javascript')
    </body>


    <!-- Mirrored from wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2017 10:50:23 GMT -->
    </html>
