<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.net/site-template/agrul/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 03:14:33 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agrul - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('public/website/assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('public/website/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/shop.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/unit-test.css') }}" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->
    <style>
        .btn
        {
            background: red!important;
        }
    </style>

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-9">
                    <div class="flex-item left">
                        <p>
                            That's right, we only sell 100% organic
                        </p>
                        <ul>
                            <li>
                                <a href="{{ route('member') }}" class="btn btn-danger">Member</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i> +4733378901
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        @include('website.layouts.header')
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

   @yield('content')
    <!-- Start Footer
    ============================================= -->
    @include('website.layouts.footer')

    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('public/website/assets/js/jquery-3.6.0.min.js') }}') }}"></script>
    <script src="{{ asset('public/website/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.scrolla.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/loopcounter.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/main.js') }}"></script>


</body>

<!-- Mirrored from validthemes.net/site-template/agrul/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 03:15:11 GMT -->
</html>
