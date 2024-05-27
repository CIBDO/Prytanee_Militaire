<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>PMK-MALI</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.nice-number.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <style>
        .form_title {
            position: relative !important;
            left: -15px !important;
        }

        .form-group {
            margin-bottom: 30px !important;
        }

        .btn_perso {

        }

        /* CSS */
        .button-21 {
            align-items: center;
            appearance: none;
            background-color: #07294d;
            background-image: linear-gradient(1deg, #07294d, #07294d 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-flex;
            font-family: CircularStd, sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s, background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .button-21:active,
        .button-21:focus {
            outline: none;
        }

        .button-21:hover {
            background-position: -20px -20px;
        }

        .button-21:focus:not(:active) {
            box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
        }

        /* CSS */
        .button-21-red {
            align-items: center;
            appearance: none;
            background-color: #dd2e2e;
            background-image: linear-gradient(1deg, #dd2e2e, #dd2e2e 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-flex;
            font-family: CircularStd, sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s, background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .button-21-red:active,
        .button-21-red:focus {
            outline: none;
        }

        .button-21-red:hover {
            background-position: -20px -20px;
        }

        .button-21-red:focus:not(:active) {
            box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @if(Session::has('flash_notification'))
        <!-- Pull in jQuery from CDN if not already loaded -->
        <script>window.jQuery || document.write("<script src='//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'><\/script>")</script>
        <!-- Pull in Toastr CSS and JS from CDN to be always up2date -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            $('document').ready(function(){
                toastr.options = $.parseJSON('{!!json_encode(config('flash-toastr.options'), JSON_UNESCAPED_SLASHES)!!}');
                @foreach (session('flash_notification', collect())->toArray() as $message)
                    toastr["{!! $message['level'] !!}"]("{!! $message['message'] !!}", "{!! $message['title'] !!}");
                @endforeach
            });
        </script>
        {{ Session::forget('flash_notification') }}
    @endif
</head>

<body>

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

@include('frontend.layouts.partials.header')

@yield('content')

<!--====== FOOTER PART START ======-->

@include('frontend.layouts.partials.footer')

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->


<!--====== jquery js ======-->
<script src="{{asset('frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('frontend/js/slick.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Counter Up js ======-->
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>

<!--====== Nice Select js ======-->
<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>

<!--====== Nice Number js ======-->
<script src="{{asset('frontend/js/jquery.nice-number.min.js')}}"></script>

<!--====== Count Down js ======-->
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>

<!--====== Validator js ======-->
<script src="{{asset('frontend/js/validator.min.js')}}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{asset('frontend/js/ajax-contact.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('frontend/js/main.js')}}"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{asset('frontend/js/map-script.js')}}"></script>

@yield('add-js')

</body>
</html>
