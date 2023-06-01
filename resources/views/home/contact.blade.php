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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <div id="preloader">
        <div id="loading-wrapper" class="show">
            {{-- <div id="loading-text"> <img src="{{ asset('iteck') }}/assets/img/logo_loading.png" alt=""> </div> --}}
            <div id="loading-content"></div>
        </div>
    </div>

    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('iteck') }}/assets/img/sman8.png" alt="">
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
    <main class="contact-page style-5">
        @include('notif.index')
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20"> Hubungi <span> Kami </span> </h2>
                    <p>Pesan anda akan kami baca dalam 24 jam</p>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="{{ route('home.contact.post') }}" class="form" method="post">
                                @csrf
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control" placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="phone" class="form-control"  placeholder="Phone Number (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="web" class="form-control" placeholder="Your Website (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="jenis" class="form-select">
                                                <option value="how can we help" selected>How can we help you?</option>
                                                <option value="saran">Saran</option>
                                                <option value="masukan">Masukan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" name="pesan" class="form-control" placeholder="How can we help you?" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#" class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Send Your Request" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->

        <!-- ====== start contact page ====== -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7984857847377!2d119.4467384139848!3d-5.136124053385283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd3165008369%3A0x7af75b8baf265f2b!2sFakultas%20Ilmu%20Komputer%20UMI!5e0!3m2!1sen!2sid!4v1679318055147!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <!-- ====== start contact page ====== -->
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
