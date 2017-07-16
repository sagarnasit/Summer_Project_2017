<footer>
      <!--=================== Footer Top Section ===================-->
      <section class="footer-top">
            <div class="container">
                  <div class="row">
                        <form action="/subscribers" method="POST">
                              <div class="col-lg-9 col-md-9 col-sm-9">
                                    <div class="split">
                                          <!--=================== Newsletter ===================-->
                                          {{csrf_field()}}
                                          <input type="email" class="form-control color-scheme-3" name="email" id="email" placeholder="Enter Your Email Address" required="">
                                    </div>
                              </div>
                              <div class="col-lg-3 col-md-3 col-sm-3">
                                    <!--=================== Newsletter ===================-->
                                    <button type="submit" class="btn btn-default">Subscribe</button>
                              </div>
                        </form>
                  </div>
                  @include ('Boot.layouts.errors')
            </div>
      </section>
      <!--=================== Footer Middle Section ===================-->
      <section class="footer-middle padding-bottom-40">
            <div class="container">
                  <div class="row">
                        <!--=================== Footer Middle Column 1 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInLeft"  data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">
                              <h4 class="page-header">Information</h4>
                              <ul class="list-unstyled footer-list-style">
                                    <li><a href="#">Frequently Asked Questions</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Website terms of use</a></li>
                                    <li><a href="#">Store pick-up</a></li>
                                    <li><a class="margin-bottom-30" href="#">Site map</a></li>
                              </ul>
                        </div>
                        <!--=================== Footer Middle Column 2 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInLeft"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">
                              <h4 class="page-header page-header1">ORDERS & RETURNS</h4>
                              <ul class="list-unstyled footer-list-style">
                                    <li><a href="/shippingpolicy">Shipping Policy</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="#">Order Policy</a></li>
                                    <li><a href="#">Store Policy</a></li>
                                    <li><a class="margin-bottom-30" href="#">Gift Return Policy</a></li>
                              </ul>
                        </div>
                        <!--=================== Footer Middle Column 3 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInRight"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.8s">
                              <h4 class="page-header page-header1">Instagram Gallery</h4>
                              <div class="instagram">
                                    <ul class="list-inline margin-bottom-20">
                                          <li><img src="{{--images/best_girl.jpg--}}assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-1.jpg" alt=""></li>
                                          <li><img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-2.jpg" alt=""></li>
                                          <li><img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-3.jpg" alt=""></li>
                                          <li><img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-4.jpg" alt=""></li>
                                    </ul>
                              </div>
                              <a href="/product" target="_blank" class="btn btn-default btn-block margin-top-20 font-color-black font-bold text-uppercase">View Gallery</a>
                        </div>
                        <!--=================== Footer Middle Column 4 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 btn-find animated fadeInRight"  data-paira-animation="fadeInRight" data-paira-animation-delay="1.2s">
                              <h4 class="page-header">Shop local store</h4>
                              <button type="submit" class="btn btn-default color-scheme-3 font-size-20 font-bold font-size-16"><i class="fa fa-map-marker margin-right-10"></i>Find a store</button>
                        </div>
                  </div>
            </div>
      </section>
      <!--=================== Footer Bottom Section ===================-->
      <section class="footer-bottom animated fadeInUp">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12 text-center">
                              <ul class="list-inline margin-bottom-20">
                                    <li><a href="#"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-4.png" alt=""></a></li>
                              </ul>
                              <hr>
                              <ul class="list-inline margin-top-20 margin-bottom-20">
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                                    <li><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-payment-1.png" alt=""></li>
                              </ul>
                              <hr>
                              <p class="margin-top-30 margin-bottom-20">© 2015 <b>ThemeTiday.</b> All Rights Reserved.</p>
                        </div>
                  </div>
            </div>
      </section>
</footer>