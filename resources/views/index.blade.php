<!DOCTYPE html>
<?php $locale = session()->get('locale'); ?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $locale == 'en' ? 'ltr' : 'rtl'}}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Localization Example</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/lang-trans.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{route('index')}}">Localization</a></h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">@lang('index.nav.home')</a></li>
                <li><a href="#about">@lang('index.nav.about')</a></li>
                <li class="drop-down"><a href="">@lang('index.nav.lang')</a>
                    <ul>
                        <li><a href="{{route('lang','en')}}">English</a></li>
                        <li><a href="{{route('lang','ar')}}">عربي</a></li>
                    </ul>
                </li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Laravel localization</h1>
                <ul>
                    <li>
                        <h2><strong>@lang('index.home.chosen_lang_title') : <h1>@lang('index.home.chosen_lang')</h1>
                            </strong></h2>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset('assets/img/trans.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>Laravel localization: @lang('index.about.about_title')</h2>
                    <h3>@lang('index.about.about_sub_title')</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        @lang('index.about.about_details.about_top')
                    </p>
                    <ul>
                        <li>- @lang('index.about.about_details.about_point_1') </li>
                        <li>- @lang('index.about.about_details.about_point_2') </li>
                        <li>- @lang('index.about.about_details.about_point_3') </li>
                        <li>- @lang('index.about.about_details.about_point_4') </li>
                    </ul>
                    <p class="font-italic">
                        @lang('index.about.about_details.about_bottom') <a
                            href="https://lokalise.com/blog/laravel-localization-step-by-step/"
                            class="text-decoration-underline">@lang('index.about.about_details.about_click')</a>.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; @lang('index.rights.copyright') <strong><span>Localization</span></strong>. @lang('index.rights.reserved')
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://www.linkedin.com/in/safia-berri-949787163/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://github.com/Safia-Be" target="_blank" class="github"><i class="bx bxl-github"></i></a>

        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
