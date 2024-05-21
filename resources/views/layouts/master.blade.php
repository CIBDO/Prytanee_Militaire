 <!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:31:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('akkhor/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('akkhor/js/modernizr-3.6.0.min.js')}}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
       @include('layouts.partials.header')
       
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('layouts.partials.sidebar')
            <!-- Sidebar Area End Here -->
            @yield('content')
            <!-- Footer Area Start Here -->
            {{-- <footer class="footer-wrap-layout1">
                <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                        href="#">PsdBosS</a>
                </div>
            </footer> --}}
            <!-- Footer Area End Here -->
            
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="{{asset('akkhor/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('akkhor/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('akkhor/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('akkhor/js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src="{{asset('akkhor/js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <script src="{{asset('akkhor/js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('akkhor/js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('akkhor/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <script src="{{asset('akkhor/js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <script src="{{asset('akkhor/js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('akkhor/js/main.js')}}"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:03 GMT -->
</html>