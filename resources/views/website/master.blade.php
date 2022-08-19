<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  @include('website.partials.head')
  @stack('css')
</head>

<body>
  @yield('content')
  @if (Route::currentRouteName() == 'user.index')
  <div id="tst-app" class="tst-app">

    <!-- top bar frame -->
    <div class="tst-menu-frame">
      <!-- top bar -->
      <div class="tst-dynamic-menu" id="tst-dynamic-menu">
        <div class="tst-menu">
          <!-- logo -->
          <img src="{{ asset('assets/theme/img/logo-sm.svg') }}" class="tst-logo" alt="Tastyc">
          <!-- menu -->
          <nav>
            <ul>
              <li class="menu-item-has-children current-menu-item"><a href="home-slider.html">Home</a>
                <ul>
                  <li><a href="home-slider.html">Home slider</a></li>
                  <li><a href="home-image.html">Home image</a></li>
                  <li><a href="home-video.html">Home video</a></li>
                  <li><a data-no-swup target="_blank" href="onepage.html">Onepage</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a href="about-us.html">About</a>
                <ul>
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="about-me.html">About employee</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="history.html">History</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a href="menu-1.html">Menu</a>
                <ul>
                  <li><a href="menu-1.html">Menu type 1</a></li>
                  <li><a href="menu-2.html">Menu type 2</a></li>
                  <li><a href="menu-3.html">Menu type 3</a></li>
                  <li><a href="menu-4.html">Menu type 4</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children"><a href="blog-list.html">blog</a>
                <ul>
                  <li><a href="blog-list.html">blog list</a></li>
                  <li><a href="blog-single.html">publication</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
          <!-- menu end -->
          <!-- top bar right -->
          <div class="tst-menu-right">
            <!-- reservation button -->
            <a href="#." class="tst-btn tst-res-btn" data-no-swup>Reservation</a>
            <div class="tst-minicart">
              <!-- minicart button -->
              <a href="#." class="tst-cart">
                <svg xmlns="{{'http://www.w3.org/2000/svg'}}" viewBox="0 0 128 128">
                  <path
                    d="M87.7,33.1l-0.8-10.8C86,10.4,76,1,64,1s-22.1,9.4-22.9,21.3l-0.8,10.8H28.8c-4.7,0-8.6,3.7-9,8.4l-5.4,75.9c0,0,0,0,0,0 c-0.2,2.5,0.7,5,2.4,6.8s4.1,2.9,6.6,2.9h81.3c2.5,0,4.9-1,6.6-2.9c1.7-1.8,2.6-4.3,2.4-6.8l-5.4-75.2c-0.4-5.1-4.6-9-9.7-9H87.7z M47.1,22.7C47.7,13.9,55.1,7,64,7s16.3,6.9,16.9,15.7l0.7,10.4H46.3L47.1,22.7z M102.3,42.6l5.4,75.2c0.1,0.8-0.2,1.6-0.8,2.3 c-0.6,0.6-1.4,1-2.2,1H23.4c-0.8,0-1.6-0.3-2.2-1s-0.9-1.4-0.8-2.3h0l5.4-75.9c0.1-1.6,1.4-2.8,3-2.8h11.1l-0.6,8 c-0.1,1.7,1.1,3.1,2.8,3.2c0.1,0,0.1,0,0.2,0c1.6,0,2.9-1.2,3-2.8l0.6-8.4h36.2l0.6,8.4c0.1,1.7,1.5,2.9,3.2,2.8 c1.7-0.1,2.9-1.5,2.8-3.2l-0.6-8h10.5C100.5,39.1,102.1,40.6,102.3,42.6z" />
                </svg>
                <div class="tst-cart-number">5</div>
              </a>
              <!-- minicart button end -->
              <!-- minicart -->
               <div class="tst-minicart-window">

                <div class="tst-minicart-header">
                  <div class="tst-suptitle tst-suptitle-center"></div>
                  <h5>Your order, sir!</h5>
                </div>

                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a href="#.">
                      <img src="{{ asset('assets/theme/img/menu/1.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                      Pancakes with strawberries
                    </a>
                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>7.50</bdi></span></span>
                  </li>
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a href="#.">
                      <img src="{{ asset('assets/theme/img/menu/2.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                      King Burger
                    </a>
                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></span>
                  </li>
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a href="#.">
                      <img src="{{ asset('assets/theme/img/menu/3.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                      Мegan casserole
                    </a>
                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>16.50</bdi></span></span>
                  </li>
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a href="#.">
                      <img src="{{ asset('assets/theme/img/menu/4.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                      The largest burger
                    </a>
                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>59.00</bdi></span></span>
                  </li>
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#." class="remove remove_from_cart_button" aria-label="Remove this item">×</a>
                    <a href="#.">
                      <img src="{{ asset('assets/theme/img/menu/5.jpg') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="item">
                      Berry cocktail with ice
                    </a>
                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi></span></span>
                  </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                  <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>298.00</bdi></span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                  <a href="#." class="button wc-forward tst-anima-link">View cart</a>
                  <a href="#." class="button checkout wc-forward tst-anima-link">Checkout</a>
                </p>

              </div>
            </div>
            <!-- minicart end -->
            <!-- menu button -->
            <div class="tst-menu-button-frame">
              <div class="tst-menu-btn">
                <div class="tst-burger">
                  <span></span>
                </div>
              </div>
            </div>
            <!-- menu button end -->
          </div>
          <!-- top bar right end  -->
        </div>
      </div>
      <!-- top bar end -->
    </div>
    <!-- top bar frame -->

    <div id="tst-dynamic-banner" class="tst-dynamic-banner">

      <!-- banner -->
      <div class="tst-banner">
        <div class="tst-cover-frame">
          <img src="{{ asset('assets/theme/img/banners/banner-1.jpg') }}" alt="cover" class="tst-cover tst-parallax">
          <div class="tst-overlay"></div>
        </div>
        <div class="tst-banner-content-frame">
          <div class="container">
            <div class="tst-main-title-frame">
              <div class="tst-main-title">
                <div class="tst-suptitle tst-suptitle-mobile-center tst-text-shadow tst-white-2 tst-mb-15">Hello, new friend!</div>
                <h1 class="tst-white-2 tst-text-shadow tst-mb-30">Welcome Back <br>to Tastyc</h1>
                <div class="tst-text tst-text-shadow tst-text-lg tst-white-2 tst-mb-30">Quaerat debitis, vel, sapiente dicta sequi <br>labore porro pariatur harum expedita.</div>
                <a href="#." class="tst-btn tst-btn-lg tst-btn-shadow tst-res-btn tst-mr-30">Reservation</a>
                <a href="menu-1.html" class="tst-label tst-white-2">Open Menu</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- banner end -->

    </div>

    <div id="tst-dynamic-content" class="tst-dynamic-content">

      <div class="tst-content-frame">
        <div class="tst-content-box">

          <!-- scroll hint -->
          <div class="container">
            <a href="#tst-dynamic-content" class="tst-scroll-hint-frame tst-anchor-scroll">
              <div class="tst-scroll-hint"></div>
            </a>
          </div>
          <!-- scroll hint end -->

          <div class="container tst-p-60-0">

            <div class="row align-items-center flex-sm-row-reverse">

              <div class="col-lg-6">

                <!-- about text -->
                <div class="tst-mb-60">
                  <div class="tst-suptitle tst-mb-15">About us</div>
                  <h3 class="tst-mb-30">We invite you to<br> visit our restaurant</h3>
                  <p class="tst-text tst-mb-30">Assumenda possimus eaque illo iste, autem. Porro eveniet, autem ipsam vitae amet repellat repudiandae tenetur, quod corrupti consectetur cum? Repudiandae dignissimos fugiat sit nam.
                    Tempore aspernatur quae repudiandae dolorem, beatae dolorum, praesentium itaque et quam quaerat. Cumque, consequatur!</p>
                  <a href="about-us.html" class="tst-btn tst-anima-link tst-mr-30">Read more</a>
                  <a href="#." class="tst-icon-link"><i class="fab fa-facebook-f"></i></a>
                  <a href="#." class="tst-icon-link"><i class="fab fa-instagram"></i></a>
                  <a href="#." class="tst-icon-link"><i class="fab fa-twitter"></i></a>
                  <a href="#." class="tst-icon-link"><i class="fab fa-youtube"></i></a>
                </div>
                <!-- about text end -->

              </div>

              <div class="col-lg-6">

                <!-- about video -->
                <div class="tst-about-cover tst-mb-60">
                  <img src="{{ asset('assets/theme/img/about.jpg') }}" alt="cover" class="tst-cover">
                  <div class="tst-overlay"></div>
                  <div class="tst-btn-animation"></div>
                  <a class="tst-play-button" data-fancybox href="https://www.youtube.com/watch?v=SXJqEnauNaY" data-width="10" data-height="600">
                    <i class="fas fa-play"></i>
                  </a>
                </div>
                <!-- about video end -->

              </div>

            </div>

            <div class="tst-spacer tst-spacer-only-bottom-space"></div>

            <div class="row">

              <div class="col-lg-12">

                <!-- title -->
                <div class="text-center">
                  <div class="tst-suptitle tst-suptitle-center tst-mb-15">Features</div>
                  <h3 class="tst-mb-30">Why people choose us?</h3>
                  <p class="tst-text tst-mb-60">Porro eveniet, autem ipsam vitae consequatur!</p>
                </div>
                <!-- title end -->

              </div>

              <div class="col-lg-4">

                <!-- icon box -->
                <div class="tst-icon-box tst-mb-60">
                  <img src="{{ asset('assets/theme/img/icons/1.svg') }}" alt="icon" class="tst-mb-30">
                  <h5 class="tst-mb-30">Menu for every taste</h5>
                  <div class="tst-text">Dolor sit amet, consectetur adipisicing elit et molestias possimus</div>
                </div>
                <!-- icon box end -->

              </div>
              <div class="col-lg-4">

                <!-- icon box -->
                <div class="tst-icon-box tst-mb-60">
                  <img src="{{ asset('assets/theme/img/icons/2.svg') }}" alt="icon" class="tst-mb-30">
                  <h5 class="tst-mb-30">Always fresh ingredients</h5>
                  <div class="tst-text">Assumenda possimus eaque illo iste, autem. Porro eveniet autem</div>
                </div>
                <!-- icon box end -->

              </div>
              <div class="col-lg-4">

                <!-- icon box -->
                <div class="tst-icon-box tst-mb-60">
                  <img src="{{ asset('assets/theme/img/icons/3.svg') }}" alt="icon" class="tst-mb-30">
                  <h5 class="tst-mb-30">Experienced chefs</h5>
                  <div class="tst-text">Rolorem, beatae dolorum, praesentium itaque et quam quaerat</div>
                </div>
                <!-- icon box end -->

              </div>

            </div>

            <div class="tst-spacer tst-spacer-only-bottom-space"></div>

            <!-- banner sm -->
            <div class="tst-banner-sm">

              <div class="tst-cover-frame">
                <img src="{{ asset('assets/theme/img/menu/4.jpg') }}" alt="cover" class="tst-cover">
                <div class="tst-overlay"></div>
              </div>

              <div class="row align-items-center">

                <div class="col-lg-8">

                  <div class="tst-text-frame">
                    <div class="tst-suptitle tst-suptitle-mobile-center tst-white-2 tst-mb-15">About us</div>
                    <h2 class="tst-white-2 tst-mb-30">Working hours</h2>
                    <p class="tst-text tst-white-2 tst-mb-30">Rolorem, beatae dolorum, praesentium itaque et quam quaerat.</p>
                    <div class="tst-btn-mobile">
                      <a href="#." class="tst-btn tst-res-btn tst-mr-30">Reservation</a>
                      <a href="contact.html" class="tst-label tst-white-2">Contact us</a>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4">

                  <div class="tst-wh-frame">

                    <div class="tst-mb-30">
                      <div class="tst-label tst-mb-15">Sunday to Tuesday</div>
                      <div class="h5">09 <span class="tst-color">:</span> 00</div>
                      <div class="h5">22 <span class="tst-color">:</span> 00</div>
                    </div>

                    <div>
                      <div class="tst-label tst-mb-15">Friday to Saturday</div>
                      <div class="h5">11 <span class="tst-color">:</span> 00</div>
                      <div class="h5">19 <span class="tst-color">:</span> 00</div>
                    </div>

                  </div>

                </div>
              </div>

            </div>
            <!-- banner sm end -->

            <div class="tst-spacer"></div>

            <div class="row">
              <div class="col-sm-6 col-lg-3">

                <!-- counter -->
                <div class="tst-count tst-mb-70">
                  <div class="h3 tst-mb-15"><span class="tst-number" data-count="200">0</span><span class="tst-color">+</span></div>
                  <div class="tst-label">Visitors daily</div>
                </div>
                <!-- counter end -->

              </div>
              <div class="col-sm-6 col-lg-3">

                <!-- counter -->
                <div class="tst-count tst-mb-70">
                  <div class="h3 tst-mb-15"><span class="tst-number" data-count="400">0</span><span class="tst-color">+</span></div>
                  <div class="tst-label">Deliveries monthly</div>
                </div>
                <!-- counter end -->

              </div>
              <div class="col-sm-6 col-lg-3">

                <!-- counter -->
                <div class="tst-count tst-mb-70">
                  <div class="h3 tst-mb-15"><span class="tst-number" data-count="100"></span><sup class="tst-color">%</sup></div>
                  <div class="tst-label">Positive feedback</div>
                </div>
                <!-- counter end -->

              </div>
              <div class="col-sm-6 col-lg-3">

                <!-- counter -->
                <div class="tst-count tst-mb-70">
                  <div class="h3 tst-mb-15"><span class="tst-number" data-count="40">0</span><span class="tst-color">+</span></div>
                  <div class="tst-label">Awards and honors</div>
                </div>
                <!-- counter end -->

              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- call to action -->
      <div class="tst-call-to-action">
        <div class="container">

          <div class="row align-items-center">
            <div class="col-lg-6">

              <!-- text -->
              <div class="tst-cta-frame">
                <div class="tst-cta">
                  <div class="tst-fade-up">
                    <div class="tst-suptitle tst-suptitle-mobile-md-center tst-text-shadow tst-white-2 tst-mb-15">Mobile application</div>
                  </div>
                  <h2 class="tst-white-2 tst-text-shadow tst-mb-30 tst-fade-up">Download <br>our application</h2>
                  <div class="tst-fade-up">
                    <div class="tst-text tst-text-lg tst-text-shadow tst-white-2">Quaerat debitis, vel, sapiente dicta sequi <br>labore porro pariatur harum expedita.</div>
                  </div>
                  <a href="https://www.apple.com/ua/app-store/" target="_blank" class="tst-btn tst-btn-lg tst-btn-shadow tst-mt-30 tst-fade-up"><i class="fab fa-app-store"></i> Appstore</a>
                  <a href="https://play.google.com/store" target="_blank" class="tst-btn tst-btn-lg tst-btn-shadow tst-mt-30 tst-fade-up"><i class="fab fa-google-play"></i> Playmarket</a>
                </div>
              </div>
              <!-- text end -->

            </div>
            <div class="col-lg-6">

              <!-- image -->
              <img src="{{ asset('assets/theme/img/phone.png') }}" alt="phone" class="tst-cta-image tst-fade-up">
              <!-- image end -->

            </div>
          </div>
        </div>
      </div>
      <!-- call to action end -->

      <div class="tst-content-frame">
        <div class="tst-content-box">

          <div class="container tst-p-60-60">

            <div class="row">

              <div class="col-lg-12">

                <!-- title -->
                <div class="text-center">
                  <div class="tst-suptitle tst-suptitle-center tst-mb-15">Testimonials</div>
                  <h3 class="tst-mb-30">What Our visitors say</h3>
                  <p class="tst-text">Porro eveniet, autem ipsam corrupti consectetur cum. <br>Repudiandae dignissimos fugiat sit nam.</p>
                </div>
                <!-- title end -->

              </div>
              <div class="col-lg-12">

                <!-- testimonials slider -->
                <div class="swiper-container tst-testimonials-slider tst-cursor-scroll">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">

                      <!-- testimonials -->
                      <div class="tst-testimonial-card">
                        <div class="tst-quote">"</div>
                        <h5 class="tst-mb-30">It was very delicious!</h5>
                        <p class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi dolorem? Voluptates rem magnam nesciunt ullam hic error sed, minus, accusantium inventore ex reprehenderit ipsum
                          aperiam libero ut, laudantium delectus deleniti debitis quas dolore quos. Accusamus ea saepe, veniam. Nemo.</p>
                        <div class="tst-spacer-sm"></div>
                        <div class="tst-testimonial-bottom">
                          <div class="tst-visitor">
                            <img src="{{ asset('assets/theme/img/faces/1.jpg') }}" alt="author">
                            <h6>Emma Newman</h6>
                          </div>
                          <div class="tst-date">02.02.21</div>
                        </div>
                      </div>
                      <!-- testimonials end -->

                    </div>
                    <div class="swiper-slide">

                      <!-- testimonials -->
                      <div class="tst-testimonial-card">
                        <div class="tst-quote">"</div>
                        <h5 class="tst-mb-30">I'm delighted!</h5>
                        <p class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi dolorem? Voluptates rem magnam nesciunt ullam hic error sed, minus, accusantium inventore ex reprehenderit ipsum
                          aperiam libero ut, laudantium delectus deleniti debitis quas dolore quos. Accusamus ea saepe, veniam. Nemo.</p>
                        <div class="tst-spacer-sm"></div>
                        <div class="tst-testimonial-bottom">
                          <div class="tst-visitor">
                            <img src="{{ asset('assets/theme/img/faces/2.jpg') }}" alt="author">
                            <h6>Viktoria Freeman</h6>
                          </div>
                          <div class="tst-date">02.02.21</div>
                        </div>
                      </div>
                      <!-- testimonials end -->

                    </div>
                    <div class="swiper-slide">

                      <!-- testimonials -->
                      <div class="tst-testimonial-card">
                        <div class="tst-quote">"</div>
                        <h5 class="tst-mb-30">I will visit again.</h5>
                        <p class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi dolorem? Voluptates rem magnam nesciunt ullam hic error sed, minus, accusantium inventore ex reprehenderit ipsum
                          aperiam libero ut, laudantium delectus deleniti debitis quas dolore quos. Accusamus ea saepe, veniam. Nemo.</p>
                        <div class="tst-spacer-sm"></div>
                        <div class="tst-testimonial-bottom">
                          <div class="tst-visitor">
                            <img src="{{ asset('assets/theme/img/faces/3.jpg') }}" alt="author">
                            <h6>Paul Trueman</h6>
                          </div>
                          <div class="tst-date">02.02.21</div>
                        </div>
                      </div>
                      <!-- testimonials end -->

                    </div>
                    <div class="swiper-slide">

                      <!-- testimonials -->
                      <div class="tst-testimonial-card">
                        <div class="tst-quote">"</div>
                        <h5 class="tst-mb-30">The best restaurant!</h5>
                        <p class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eligendi dolorem? Voluptates rem magnam nesciunt ullam hic error sed, minus, accusantium inventore ex reprehenderit ipsum
                          aperiam libero ut, laudantium delectus deleniti debitis quas dolore quos. Accusamus ea saepe, veniam. Nemo.</p>
                        <div class="tst-spacer-sm"></div>
                        <div class="tst-testimonial-bottom">
                          <div class="tst-visitor">
                            <img src="{{ asset('assets/theme/img/faces/4.jpg') }}" alt="author">
                            <h6>Oscar Oldman</h6>
                          </div>
                          <div class="tst-date">02.02.21</div>
                        </div>
                      </div>
                      <!-- testimonials end -->

                    </div>
                  </div>
                </div>
                <!-- testimonials slider end -->

              </div>

              <div class="col-lg-12">

                <!-- slider navigation -->
                <div class="tst-slider-navigation">
                  <a href="about-us.html" class="tst-btn tst-anima-link">More about us</a>
                  <div class="tst-slider-pagination tst-testi-pagination"></div>
                  <div class="tst-nav tst-right">
                    <div class="tst-label">Slider navigation</div>
                    <div class="tst-slider-btn tst-testi-prev"><i class="fas fa-arrow-left"></i></div>
                    <div class="tst-slider-btn tst-testi-next"><i class="fas fa-arrow-right"></i></div>
                  </div>
                </div>
                <!-- slider navigation end -->

              </div>
            </div>

            <div class="tst-spacer"></div>

            <div class="row align-items-center">

              <div class="col-lg-12">

                <!-- title -->
                <div class="text-center">
                  <div class="tst-suptitle tst-suptitle-center tst-mb-15">Newsletter</div>
                  <h3 class="tst-mb-30">Use the tips <br>and recipes of our chefs</h3>
                  <p class="tst-text tst-mb-60">Porro eveniet, autem ipsam corrupti consectetur cum. <br>Repudiandae dignissimos fugiat sit nam.</p>
                </div>
                <!-- title end-->

              </div>
              <div class="col-lg-4">

                <!-- blog card -->
                <div class="tst-blog-card tst-mb-60">
                  <a href="blog-single.html" class="tst-cover-frame tst-anima-link">
                    <img src="{{ asset('assets/theme/img/blog/1.jpg') }}" alt="cover">
                    <div class="tst-card-badge tst-auxiliary-color-2">Salads</div>
                  </a>
                  <div class="tst-descr">
                    <h5 class="tst-mb-15"><a href="blog-list.html" class="tst-anima-link">Supporting food flavors</a></h5>
                    <div class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias...</div>
                    <div class="tst-spacer-sm"></div>
                    <div class="tst-post-bottom">
                      <div class="tst-post-author">
                        <img src="{{ asset('assets/theme/img/faces/1.jpg') }}" alt="author">
                        <h6>Emma Newman</h6>
                      </div>
                      <div class="tst-date">02.02.21</div>
                    </div>
                  </div>
                </div>
                <!-- blog card end -->

              </div>

              <div class="col-lg-4">

                <!-- blog card -->
                <div class="tst-blog-card tst-mb-60">
                  <a href="blog-single.html" class="tst-cover-frame tst-anima-link">
                    <img src="{{ asset('assets/theme/img/blog/2.jpg') }}" alt="cover">
                    <div class="tst-card-badge tst-auxiliary-color-1">Desserts</div>
                  </a>
                  <div class="tst-descr">
                    <h5 class="tst-mb-15"><a href="blog-list.html" class="tst-anima-link">Creamy Chicken Alfredo</a></h5>
                    <div class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias...</div>
                    <div class="tst-spacer-sm"></div>
                    <div class="tst-post-bottom">
                      <div class="tst-post-author">
                        <img src="{{ asset('assets/theme/img/faces/2.jpg') }}" alt="author">
                        <h6>Viktoria Freeman</h6>
                      </div>
                      <div class="tst-date">02.02.21</div>
                    </div>
                  </div>
                </div>
                <!-- blog card end -->

              </div>
              <div class="col-lg-4">

                <!-- blog card -->
                <div class="tst-blog-card tst-mb-60">
                  <a href="blog-single.html" class="tst-cover-frame tst-anima-link">
                    <img src="{{ asset('assets/theme/img/blog/3.jpg') }}" alt="cover">
                    <div class="tst-card-badge tst-auxiliary-color-3">Seafood</div>
                  </a>
                  <div class="tst-descr">
                    <h5 class="tst-mb-15"><a href="blog-list.html" class="tst-anima-link">Air Fryer Salmon</a></h5>
                    <div class="tst-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestias...</div>
                    <div class="tst-spacer-sm"></div>
                    <div class="tst-post-bottom">
                      <div class="tst-post-author">
                        <img src="{{ asset('assets/theme/img/faces/3.jpg') }}" alt="author">
                        <h6>Oscar Oldman</h6>
                      </div>
                      <div class="tst-date">02.02.21</div>
                    </div>
                  </div>
                </div>
                <!-- blog card end -->

              </div>
              <div class="col-lg-12">

                <!-- read more -->
                <div class="tst-read-more">
                  <div class="tst-text">Read the news of our restaurant, recipes for delicious fears, tips for your home kitchen in our blog!</div>
                  <a href="blog-list.html" class="tst-btn tst-anima-link">All publications</a>
                </div>
                <!-- read more end -->

              </div>
            </div>

            <div class="tst-spacer"></div>

            <div class="tst-banner-sm">
              <div class="tst-cover-frame">
                <img src="{{ asset('assets/theme/img/menu/1.jpg') }}" alt="cover" class="tst-cover">
                <div class="tst-overlay"></div>
              </div>
              <div class="row align-items-center">
                <div class="col-lg-12">
                  <div class="tst-text-frame text-center">
                    <div class="tst-suptitle tst-suptitle-mobile-center tst-suptitle-center tst-text-shadow tst-white-2 tst-mb-15">Newsletter</div>
                    <h2 class="tst-white-2 tst-text-shadow tst-mb-30">Subscribe our newsletter</h2>
                    <p class="tst-text tst-white-2 tst-text-shadow tst-mb-30">Rolorem, beatae dolorum, praesentium itaque et quam quaerat.</p>
                    <form>
                      <input type="text" placeholder="Enter your email here">
                      <button class="tst-btn" type="submit">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- footer -->
    <footer class="tst-white tst-fade-down">
      <div class="container">
        <div class="tst-footer-top">
          <img src="{{ asset('assets/theme/img/logo-sm-white.svg') }}" class="tst-logo" alt="Tastyc">
          <div class="tst-social">
            <a href="#." class="tst-icon-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#." class="tst-icon-link"><i class="fab fa-instagram"></i></a>
            <a href="#." class="tst-icon-link"><i class="fab fa-twitter"></i></a>
            <a href="#." class="tst-icon-link"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="tst-spacer tst-white"></div>
        <div class="row">
          <div class="col-lg-4">
            <div class="tst-mb-60">
              <h5 class="tst-mb-30 tst-text-shadow">About us</h5>
              <div class="tst-text tst-text-shadow tst-mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae neque illum aspernatur fugiat maiores id magni, modi, quaerat vitae. Consectetur adipisicing elit.</div>
              <a href="about-us.html" class="tst-label tst-color tst-anima-link">Read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="tst-mb-60">
              <h5 class="tst-mb-30 tst-text-shadow">Contact info</h5>
              <ul class="tst-footer-contact tst-text-shadow tst-mb-30">
                <li><span class="tst-label">Call :</span><span class="tst-text">+76 (094) 754 43 7I</span></li>
                <li><span class="tst-label">Write :</span><span class="tst-text">your.email.inbox@here.com</span></li>
                <li><span class="tst-label">Find us :</span><span class="tst-text">Canada, Toronto, North Avenue 31B,</span></li>
              </ul>
              <a href="contact.html" class="tst-label tst-color tst-anima-link">Read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="tst-mb-60">
              <h5 class="tst-mb-30 tst-text-shadow">Gallery</h5>
              <div class="swiper-container tst-footer-gallery">
                <div class="swiper-wrapper tst-cursor-zoom">
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/1.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/1.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/2.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/2.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/3.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/3.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/4.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/4.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/5.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/5.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="tst-footer-gal-item">
                      <img src="{{ asset('assets/theme/img/menu/6.jpg') }}" alt="gallery item">
                      <a data-fancybox="gal" href="{{ asset('assets/theme/img/menu/6.jpg') }}" class="tst-overlay">
                        <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tst-gallery-nav">
                  <a href="about-us.html" class="tst-label tst-color tst-anima-link">See more</a>
                  <div class="tst-fg-nav">
                    <div class="tst-slider-btn tst-fg-prev"><i class="fas fa-arrow-left"></i></div>
                    <div class="tst-slider-btn tst-fg-next"><i class="fas fa-arrow-right"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tst-spacer tst-white tst-spacer-only-bottom-space"></div>
        <div class="tst-footer-bottom">
          <div class="tst-text">© tastyc 2021 . All rights reserved.</div>
          <a href="#tst-app" class="tst-label tst-color tst-anchor-scroll">Back to top</a>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- popup -->
    <div class="tst-popup-bg">
      <div class="tst-popup-frame">
        <div class="tst-popup-body">
          <div class="tst-close-popup"><i class="fas fa-times"></i></div>
          <!-- title -->
          <div class="text-center">
            <div class="tst-suptitle tst-suptitle-center"></div>
            <h4 class="tst-mb-60">Table Reservation</h4>
          </div>
          <!-- title end-->
          <form>
            <div class="row">
              <div class="col-6 col-md-4">
                <input type="text" placeholder="First Name">
              </div>
              <div class="col-6 col-md-4">
                <input type="text" placeholder="Last Name">
              </div>
              <div class="col-6 col-md-4">
                <input type="text" placeholder="Phone">
              </div>
              <div class="col-6 col-md-4">
                <select class="wide">
                  <option data-display="Person">Not specified</option>
                  <option value="1">1 Preson</option>
                  <option value="2">2 People</option>
                  <option value="3">3 People</option>
                  <option value="4">4 People</option>
                  <option value="3">5 People</option>
                  <option value="3">6 or more</option>
                </select>
              </div>
              <div class="col-6 col-md-4">
                <div class="datepicker__container">
                  <input id="my-element" data-language='en' type='text' class="datepicker-here" data-position="bottom left" placeholder="Date">
                </div>
              </div>
              <div class="col-6 col-md-4">
                <select class="wide">
                  <option data-display="Time">Not specified</option>
                  <option value="10:00am">10:00 am</option>
                  <option value="11:00am">11:00 am</option>
                  <option value="12:00pm">12:00 pm</option>
                  <option value="1:00pm">1:00 pm</option>
                  <option value="2:00pm">2:00 pm</option>
                  <option value="3:00pm">3:00 pm</option>
                  <option value="4:00pm">4:00 pm</option>
                  <option value="5:00pm">5:00 pm</option>
                  <option value="6:00pm">6:00 pm</option>
                  <option value="7:00pm">7:00 pm</option>
                  <option value="8:00pm">8:00 pm</option>
                  <option value="9:00pm">9:00 pm</option>
                  <option value="10:00pm">10:00 pm</option>
                </select>
              </div>
              <div class="col-12">
                <textarea name="name" rows="4" placeholder="Message"></textarea>
              </div>
            </div>
            <button class="tst-btn" type="submit" name="button">Reserve a table</button>
          </form>
        </div>
      </div>
    </div>
    <!-- popup end -->
  </div>
    @endif

    @if ($errors->any())
        <div class="alert bg-danger color-palette">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-ban"></i> Error!</h5>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
          </div>
      @endif
      
      @if(Session::get('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{ Session::get('success') }}  
      </div>
      @endif

</body>
@stack('js')
</html>
