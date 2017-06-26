<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2017 10:50:12 GMT -->
<head>


 @include('Vendor.layouts.css');

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
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        
        @include('Vendor.layouts.nav')
        
        <!-- End Top Navigation -->
        
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('Vendor.layouts.sidebar')
        <!-- End Left Sidebar -->


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>

                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- ============================================================== -->
                    <!-- Different data widgets -->
                    <!-- ============================================================== -->
                    <!-- .row -->
                    @include('Vendor.layouts.windows')<!--/.row -->
                    <!--row -->
                    <!-- /.row -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- table -->
                        <!-- ============================================================== -->

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="white-box">
                                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                        <select class="form-control pull-right row b-none">
                                            <option>March 2017</option>
                                            <option>April 2017</option>
                                            <option>May 2017</option>
                                            <option>June 2017</option>
                                            <option>July 2017</option>
                                        </select>
                                    </div>
                                    <h3 class="box-title">Recent sales</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NAME</th>
                                                    <th>STATUS</th>
                                                    <th>DATE</th>
                                                    <th>PRICE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="txt-oflo">Elite admin</td>
                                                    <td>SALE</td>
                                                    <td class="txt-oflo">April 18, 2017</td>
                                                    <td><span class="text-success">$24</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                                    <td>EXTENDED</td>
                                                    <td class="txt-oflo">April 19, 2017</td>
                                                    <td><span class="text-info">$1250</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="txt-oflo">Ample Admin</td>
                                                    <td>EXTENDED</td>
                                                    <td class="txt-oflo">April 19, 2017</td>
                                                    <td><span class="text-info">$1250</span></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- chat-listing & recent comments -->
                        <!-- ============================================================== -->
                        <div class="row">
                            @yield('body')
                        </div>

                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2017 &copy; Boot.com </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        @include('Vendor.layouts.javascript')
    </body>


    <!-- Mirrored from wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2017 10:50:23 GMT -->
    </html>
