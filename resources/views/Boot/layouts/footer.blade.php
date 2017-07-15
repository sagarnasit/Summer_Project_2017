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
      <section class="footer-middle">
            <div class="container">
                  <div class="row">
                        <!--=================== Footer Middle Column 1 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInLeft"  data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">
                              <h4 class="page-header">COMPANY</h4>
                              <ul class="list-unstyled footer-list-style">
                                    <li><a href="/about_us">About Us</a></li>
                                    <li><a href="/contact_us">Contact Us</a></li>
                                    <li><a href="/terms_and _condition">Terms & Conditions</a></li>
                              </ul>
                        </div>
                        <!--=================== Footer Middle Column 2 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInLeft"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.5s">
                              <h4 class="page-header page-header1">POLICY INFO</h4>
                              <ul class="list-unstyled footer-list-style">
                                    <li><a href="/shipping_policy">Shipping Policy</a></li>
                                    <li><a href="/return_policy">Return Policy</a></li>
                                    <li><a href="/privacy_policy">Privacy Policy</a></li>
                              </ul>
                        </div>
                        <!--=================== Footer Middle Column 3 ===================-->
                        <div class="col-lg-3 col-md-3 col-sm-3 animated fadeInRight"  data-paira-animation="fadeInDown" data-paira-animation-delay="0.8s">
                              <h4 class="page-header page-header1">Instagram Gallery</h4>
                              <div class="instagram">
                                    <ul class="list-inline margin-bottom-20">
                                          <li><img src="assets/images/product/themetidy-paira-framework-boot-responsive-html-template-product-1.jpg" alt=""></li>
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
                              <!-- <button type="submit" class="btn btn-default color-scheme-3 font-size-20 font-bold font-size-16">
                              <i class="fa fa-map-marker margin-right-10"></i>Find a store</button> -->
                              <a href="/map"><button type="submit" class="btn btn-default color-scheme-3 font-size-20 font-bold font-size-16">
                                  <i class="fa fa-map-marker margin-right-10"></i>Find a store</button></a>
                            </div>
                      </div>
                </div>
          </section>
          <!--=================== Footer Bottom Section ===================-->
          <section class="footer-bottom animated fadeInUp">
            <div class="container">
                  <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 fadeInRight"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 fadeInRightr text-center">
                              <h4 class="page-header page-header1">Connect with Us</h4>
                              <ul class="list-inline margin-bottom-20">
                                    <li><a href="https://www.facebook.com/"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-1.png" alt=""></a></li>
                                    <li><a href="https://plus.google.com/"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-2.png" alt=""></a></li>
                                    <li><a href="https://www.instagram.com/"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-3.png" alt=""></a></li>
                                    <li><a href="https://twitter.com/"><img src="assets/images/footer/themetidy-paira-framework-boot-responsive-html-template-footer-social-4.png" alt=""></a></li>
                              </ul>
                              <br>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fadeInRight"></div>
                  </div>
            </div>
      </section>
</footer>
