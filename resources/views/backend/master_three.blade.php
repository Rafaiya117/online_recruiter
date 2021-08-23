<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Online_recruiter</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Canonical SEO  -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard">
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard, bootstrap 4 admin, bootstrap 4 template, bootstrap 4 dashboard, bootstrap 4, free bootstrap 4">
    <meta name="description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard - Free Bootstrap 4 Admin Template by Creative Tim">
    <meta itemprop="description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/32/original/opt_lbd_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard - Free Bootstrap 4 Admin Template by Creative Tim">
    <meta name="twitter:description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/32/original/opt_lbd_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard - Free Bootstrap 4 Admin Template by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="Free">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Light Bootstrap Dashboard - Free Bootstrap 4 Admin Template by Creative Tim">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://demos.creative-tim.com/light-bootstrap-dashboard/dashboard">
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/32/original/opt_lbd_thumbnail.jpg">
    <meta property="og:description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">
    <meta property="og:site_name" content="Creative Tim">
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{url('backend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('backend/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('backend/css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    @include('backend.partials.navbar')
    <div class="main-panel">
        <!-- fixed plugin  -->
        <div class="fixed-plugin">

        </div>
        <!-- Navbar -->
    @include('backend.partials.header_two')
    <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');
    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");
    }catch(err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
    />
</noscript>
</body>
<!--   Core JS Files   -->
<script src="{{url('/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/popper.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{url('/js/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="{{url('/js/chartist.min.js')}}"></script>
<!--  Share Plugin -->
<script src="{{url('/js/jquery.sharrre.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{url('/js/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{url('/js/light-bootstrap-dashboard.js')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{url('/js/demo.js')}}"></script>


</html>
