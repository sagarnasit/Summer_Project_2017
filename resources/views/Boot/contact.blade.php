@extends('Boot.master')
@section('title')
    <title>Contact Us</title>
@stop

@section('body')

        <section class="contact-content paira-animation-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 margin-bottom-40">
                        <div class="page-header text-center">
                            <h1 class="text-uppercase">Contact Us</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 margin-bottom-40">
                        <div id="googleMap" style="height: 500px; width: 100%;"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <div class="text-justify margin-bottom-20">
                            <form accept-charset="UTF-8" action="#" class="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-12 form-content">
                                        <input name="form_type" type="hidden" value="contact">
                                        <input name="utf8" type="hidden" value="✓">
                                        <label><i class="fa fa-user"></i></label>
                                        <input type="text" class="form-control margin-bottom-20 text-uppercase" name="contact[name]" placeholder="Name">
                                        <label><i class="fa fa-envelope"></i></label>
                                        <input type="email" class="form-control margin-bottom-20 text-uppercase" name="contact[email]" placeholder="Email">
                                        <label><i class="fa fa-phone"></i></label>
                                        <input type="telephone" class="form-control margin-bottom-20 text-uppercase" name="contact[phone]" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-content">
                                        <label><i class="fa fa-pencil"></i></label>
                                        <textarea rows="10" name="contact[body]" class="form-control margin-bottom-20 text-uppercase" placeholder="Write Your message"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default btn-lg" value="Send">Submit Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-75">
                    <div class="col-lg-12 margin-bottom-35">
                        <div class="page-header text-center">
                            <h1 class="text-uppercase">Get In Tuch</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <ul class="list-unstyled margin-bottom-20">
                            <li class="font-size-14 letter-spacing-1 font-bold">
                                <p class="margin-bottom-5">Email: <a href="#">themetidy@gmail.com</a></p>
                                <p>Toll-free: (1800) 000 8808</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled font-size-14 letter-spacing-1 font-bold">
                            <li><p>Opening Hours:</p></li>
                            <li><p>Monday to Saturday: 9am - 10pm</p></li>
                            <li>Sunday: 10am - 6pm</p></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                      <p class="font-size-14 letter-spacing-1 font-bold">9087S Divamus Faucibus Str<br>  City name,<br> Postal Code,<br> CA 90896 <br> United States</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                       <p class="font-size-14 letter-spacing-1 font-bold">8808 Ave Dermentum, Onsectetur <br> Tortor Sagittis, CA 880986,<br> United States</p>
                    </div>
                </div>
            </div>
        </section>

@stop


@section('javascript')

    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/jquery.mobile.customized.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/sticky.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/device.min.js"></script>
    <script src="assets/js/instafeed.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/jquery.simplr.smoothscroll.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <!--=================== IE10 viewport hack for Surface/desktop Windows 8 bug ===================-->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--=================== Paira Framework Main Javascript ===================-->
    <script src="assets/js/paira.js"></script>
    <!--=================== Google Map API ===================-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        if($("#googleMap").length) {
            var locations = [
                ['Head Office', 23.544997, 89.172591, 1],
                ['Head Of Developer Office', 23.544798, 89.170480, 2],
                ['Production House', 23.537337, 89.174856, 3],
                ['Head Of Designer Office', 23.531917, 89.172887, 4],
                ['Selling House', 23.545307, 89.165835, 5],
                ['Packaging House', 23.542749, 89.167293, 6],
                ['Play Ground', 23.544863, 89.177532, 7],
            ];
            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 14,
                center: new google.maps.LatLng(23.544997, 89.172591),
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
    </script>

@stop