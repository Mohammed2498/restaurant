<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Thesignatures - Restaurant HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/img/favicon.ico')}}">
    <!-- Place favicon.ico in the root Internist, General Practitonery -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/dripicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}">
    <link href="{{asset('assets/front/css/bootstrap-datepicker.min.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
</head>
<body>
<!-- header -->
<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('assets/front/img/logo/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block">
                        <div class="cart-top">
                            <ul>
                                <li><a href="#"><i class="far fa-shopping-cart"></i></a></li>
                                <li><a href="#" class="menu-tigger"><i class="fal fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7">
                        <div class="main-menu text-right pr-15">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="{{route('categories.index')}}">Categories </a></li>
                                    <li class="has-sub">
                                        <a href="{{route('menus.index')}}">Our Menu</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-xl-block">
                        <a href="{{route('reservations.step.one')}}" class="btn ss-btn">Make Reservation</a>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-area -->
        <div class="offcanvas-menu">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <form role="search" method="get" id="searchform" class="searchform"
                  action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" value="" placeholder="Search"/>
                <button><i class="fa fa-search"></i></button>
            </form>

            <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-1" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </div>
</header>
<!-- header-end -->
<!-- main-area -->
<main>
    {{$slot}}
</main>
<!-- main-area-end -->
<!-- footer -->
<footer class="footer-bg footer-p">
    <div class="footer-top pt-120 pb-190"
         style="background:url(img/bg/footer-bg.png) no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget text-center mb-30">
                        <div class="flog mt-50 mb-30">
                            <a href="#"><img src="{{asset('assets/front/img/logo/logo.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-text mb-20">
                            <p>Sed ut perspiciatis unde om is nerror sit voluptatem accustium dolorem tium totam rem
                                aperam eaque ipsa quae ab illose
                                inntore veritatis</p>
                        </div>
                        <div class="footer-social  mt-30">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget mb-30 text-center">
                        <div class="f-time-icon">
                            <img src="{{asset('assets/front/img/bg/time-bg.png')}}" alt="logo">
                        </div>
                        <div class="f-widget-title mt-100">
                            <span>AVAILABLE</span>
                            <h5>OPENING HOURS</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-time">
                                <ul>
                                    <li>
                                        <div class="day">MONDAY</div>
                                        <div class="time">9.00 - 22.00</div>
                                    </li>
                                    <li>
                                        <div class="day">TUESDAY</div>
                                        <div class="time">9.00 - 22.00</div>
                                    </li>
                                    <li>
                                        <div class="day">SATURDAY</div>
                                        <div class="time">9.00 - 22.00</div>
                                    </li>
                                    <li>
                                        <div class="day">SUNDAY</div>
                                        <div class="time">9.00 - 22.00</div>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget mb-30 text-center">
                        <div class="f-contact-icon">
                            <img src="{{asset('assets/front/img/bg/f-contact-icon.png')}}" alt="logo">
                        </div>
                        <div class="f-widget-title mt-100">
                            <span>CONTACT</span>
                            <h5>GET IN TOUCH</h5>
                        </div>
                        <div class="footer-link">
                            <div class="f-contact">
                                <p>12/7Aabot, Poor Street, New York United States</p>
                                <a href="contact.html" class="btn ss-btn mt-20">GET DIRECTIONS</a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- footer-end -->


<!-- JS here -->
<!-- JS here -->
<script src="{{asset('assets/front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/one-page-nav-min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<script src="{{asset('assets/front/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/front/js/paroller.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/js_isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/front/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/front/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/front/js/parallax-scroll.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/front/js/element-in-view.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.nice-select.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>
</body>
</html>
