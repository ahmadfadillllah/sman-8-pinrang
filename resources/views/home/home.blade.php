<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('iteck') }}/assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/animate.css" />
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/lity.css" />
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/lib/swiper.min.css" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('iteck') }}/assets/css/style.css" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="{{ asset('iteck') }}/assets/img/logo_loading.png" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('iteck') }}/assets/img/logo_home5.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.contact') }}">
                            Hubungi Kami
                        </a>
                    </li>

                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <a href="{{ route('login') }}" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>sign in <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    <main class="about-page style-5">


        <!-- ====== start about ====== -->
        <header class="about-page-sec style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="info">
                            <h1>{{ config('app.name') }}
                                <span>
                                    <img src="{{ asset('iteck') }}/assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="{{ asset('iteck') }}/assets/img/header/head5_pen.png" alt="" class="head-pen">
                                </span>
                            </h1>
                            <p>
                                APLIKASI PENGOLAHAN DATA NILAI SISWA MENGGUNAKAN METODE SCRUM DI SMA NEGERI 8 PINRANG
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('iteck') }}/assets/img/header/hand_megaphone.png" alt="" class="hand-mega slide_up_down">
            <img src="{{ asset('iteck') }}/assets/img/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
            <img src="{{ asset('iteck') }}/assets/img/header/header5_linechart.png" alt="" class="head6-charts scale_up_down">
            <img src="{{ asset('iteck') }}/assets/img/header/rocket.png" alt="" class="head6-rocket">
        </header>
        <!-- ====== end about ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="{{ asset('iteck') }}/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/wow.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/jquery.fancybox.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/lity.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/swiper.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/lib/jquery.counterup.js"></script>
    <!-- <script src="{{ asset('iteck') }}/assets/js/lib/pace.js"></script> -->
    <script src="{{ asset('iteck') }}/assets/js/lib/scrollIt.min.js"></script>
    <script src="{{ asset('iteck') }}/assets/js/main.js"></script>

</body>


<!-- Mirrored from iteck-html.themescamp.com/page-about-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 09:08:33 GMT -->
</html>
