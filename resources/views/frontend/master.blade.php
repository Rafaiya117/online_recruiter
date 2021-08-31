<!doctype html>
<html lang="en">
<head>
    <title>Online_Recruiter &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="{{url('frontend/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend//css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
</head>
<body id="top">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only"></span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
   @include('frontend.partials.header')

    <!-- HOME -->
    @yield('content')



    @include('frontend.partials.footer')

</div>

<!-- SCRIPTS -->
<script src="{{url('frontend/js/jquery.min.js')}}"></script>
<script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('frontend/js/stickyfill.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.fancybox.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.easing.1.3.js')}}"></script>

<script src="{{url('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>

<script src="{{url('frontend/js/bootstrap-select.min.js')}}"></script>

<script src="{{url('frontend/js/custom.js')}}"></script>


</body>
</html>
