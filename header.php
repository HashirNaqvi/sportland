<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?php  wp_head();  ?>
</head>

  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src=" <?php echo get_template_directory_uri();?>/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>    
   <!-- Page Header-->
      <header class="section page-header rd-navbar-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel-inner container">
                <div class="rd-navbar-collapse rd-navbar-panel-item rd-navbar-panel-item-left">
                  <!-- Owl Carousel-->
                  <div class="owl-carousel-navbar owl-carousel-inline-outer">
                    <div class="owl-inline-nav">
                      <button class="owl-arrow owl-arrow-prev"></button>
                      <button class="owl-arrow owl-arrow-next"></button>
                    </div>
                    <div class="owl-carousel-inline-wrap">
                      <div class="owl-carousel owl-carousel-inline" data-items="1" data-dots="false" data-nav="true" data-autoplay="true" data-autoplay-speed="3200" data-stage-padding="0" data-loop="true" data-margin="10" data-mouse-drag="false" data-touch-drag="false" data-nav-custom=".owl-carousel-navbar">
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Sportland vs Dream Team</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Sportland vs Real Madrid</p>
                        </article>
                        <!-- Post Inline-->
                        <article class="post-inline">
                          <time class="post-inline-time" datetime="2020">April 15, 2020</time>
                          <p class="post-inline-title">Sportland vs Barcelona</p>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-panel-item rd-navbar-panel-item-right">
                  <ul class="list-inline list-inline-bordered">
                    <li>
                      <!-- Select 2-->
                      <select class="select select-inline" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown">
                        <option value="en" selected="">en</option>
                        <option value="fr">fr</option>
                        <option value="es">es</option>
                      </select>
                    </li>
                    <li>
                      <div class="cart-inline-toggled-outer">
                        <!-- Link Cart-->
                        <button class="link link-cart cart-inline-toggle" data-rd-navbar-toggle="#cart-inline"><span class="link-cart-icon fl-bigmug-line-shopping202"></span><span class="link-cart-counter">2</span></button>
                        <!-- Cart Inline-->
                        <article class="cart-inline cart-inline-toggled" id="cart-inline">
                          <div class="cart-inline-inner">
                            <div class="cart-inline-header">
                              <h5 class="cart-inline-title">In cart: 2 products</h5>
                              <p class="cart-inline-subtitle">total price: $750</p>
                            </div>
                            <div class="cart-inline-main">
                                    <!-- Product inline-->
                                    <article class="product-inline">
                                      <div class="product-inline-aside"><a class="product-inline-figure" href="#"><img class="product-inline-image" src="<?php echo get_template_directory_uri();?>/images/product-Nike-Air-Zoom-Pegasus-67x30.png" alt="" width="67" height="30"/></a></div>
                                      <div class="product-inline-main">
                                        <p class="heading-7 product-inline-title"><a href="#">Nike Air Zoom Pegasus</a></p>
                                        <ul class="product-inline-meta">
                                          <li>
                                            <input class="form-input" type="number" data-zeros="true" value="2" min="1" max="100">
                                          </li>
                                          <li>
                                            <p class="product-inline-price">$500.00</p>
                                          </li>
                                        </ul>
                                      </div>
                                    </article>
                                    <!-- Product inline-->
                                    <article class="product-inline">
                                      <div class="product-inline-aside"><a class="product-inline-figure" href="#"><img class="product-inline-image" src="<?php echo get_template_directory_uri();?>/images/product-Nike-Baseball-Hat-55x38.png" alt="" width="55" height="38"/></a></div>
                                      <div class="product-inline-main">
                                        <p class="heading-7 product-inline-title"><a href="#">Nike Baseball Hat</a></p>
                                        <ul class="product-inline-meta">
                                          <li>
                                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="100">
                                          </li>
                                          <li>
                                            <p class="product-inline-price">$250.00</p>
                                          </li>
                                        </ul>
                                      </div>
                                    </article>
                            </div>
                            <div class="cart-inline-footer"><a class="button button-md button-default-outline" href="#">Go to Cart</a><a class="button button-md button-primary" href="#">Checkout</a></div>
                          </div>
                        </article>
                      </div>
                    </li>
                    <li><a class="link link-icon link-icon-left link-classic" href="#"><span class="icon fl-bigmug-line-login12"></span><span class="link-icon-text">Your Account</span></a></li>
                  </ul>
                </div>
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
              </div>
            </div>
            <div class="rd-navbar-main">
              <div class="rd-navbar-main-top">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="./"><img class="brand-logo " src="<?php echo get_theme_file_uri("images/logo-soccer-default-95x126.png");  ?>" alt="" width="95" height="126"/></a>
                  </div>
                  <!-- RD Navbar List-->
                  <ul class="rd-navbar-list">
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="<?php echo get_template_directory_uri();?>/images/partners-1-inverse-75x42.png" alt="" width="75" height="42"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="<?php echo get_template_directory_uri();?>/images/partners-2-inverse-88x45.png" alt="" width="88" height="45"/></a></li>
                    <li class="rd-navbar-list-item"><a class="rd-navbar-list-link" href="#"><img src="<?php echo get_template_directory_uri();?>/images/partners-3-inverse-79x52.png" alt="" width="79" height="52"/></a></li>
                  </ul>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Enter your search request here...</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit fl-budicons-launch-search81" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-main-bottom rd-navbar-darker">
                <div class="rd-navbar-main-container container">
                  <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">Game overview</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">Typography</a>
                                      </li>
                                      <li class="rd-nav-item"><a class="rd-nav-link" href="https://livedemo00.template-help.com/wt_63853_v4/soccer/index.html">Contact us</a>
                                      </li>
                                    </ul>
                  <div class="rd-navbar-main-element">
                    <ul class="list-inline list-inline-sm">
                      <li><a class="icon icon-xs icon-light fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon icon-xs icon-light fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>