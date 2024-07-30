<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:31:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SGS | Tableau de board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <!-- Favicon -->--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">--}}
{{--    <!-- Normalize CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/css/normalize.css')}}">--}}

{{--    <!-- Main CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/css/main.css')}}">--}}
{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/css/bootstrap.min.css')}}">--}}
{{--    <!-- Fontawesome CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/css/all.min.css')}}">--}}
{{--    <!-- Flaticon CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/fonts/flaticon.css')}}">--}}
{{--    <!-- Animate CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/css/animate.min.css')}}">--}}
{{--    <!-- Custom CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('akkhor/style.css')}}">--}}
{{--    <!-- Modernize js -->--}}
{{--    <script src="{{asset('akkhor/js/modernizr-3.6.0.min.js')}}"></script>--}}

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
    {{--    <!-- Full Calender CSS -->--}}
        <link rel="stylesheet" href="{{asset('akkhor/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/animate.min.css')}}">
    {{--    <!-- Data Table CSS -->--}}
    <link rel="stylesheet" href="{{asset('akkhor/css/jquery.dataTables.min.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/select2.min.css')}}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/css/datepicker.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('akkhor/style.cs')}}s">
    <!-- Modernize js -->
    <script src="{{asset('akkhor/js/modernizr-3.6.0.min.js')}}"></script>


    <link rel="stylesheet" href="{{asset('datatable/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/buttons.dataTables.min.css')}}">
    @yield('add-css')
    <style>
        button.dt-button, div.dt-button, a.dt-button, input.dt-button {

            color: white;
            background-color: rgba(0, 0, 0, 0.1);
            background: linear-gradient(to bottom, rgb(15, 60, 99) 0%, rgb(15, 60, 99) 100%);
        }
        button.dt-button:hover:not(.disabled), div.dt-button:hover:not(.disabled), a.dt-button:hover:not(.disabled), input.dt-button:hover:not(.disabled) {
            background: linear-gradient(to bottom, rgb(255, 174, 1) 0%, rgb(255, 174, 1) 100%);
        }
        .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
            color: black;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            color: #10273c;
        }
        label{
            color: #10273c;
        }
        i{
            margin: 10px;
        }
        .ui-tab-card .card-body .vertical-tab .nav-tabs .nav-item .nav-link.active {
            background-color: #0f3c63;
            color: #ffffff;
            border-color: #f57c00;
        }
        .ui-tab-card .card-body .vertical-tab .nav-tabs .nav-item .nav-link::after {
            border-left: 10px solid #f57c00;
        }
        .ui-tab-card .card-body .vertical-tab .nav-tabs .nav-item .nav-link:hover {
            background-color: #f57c00;
            border-color: #ffc181;
        }
        .dataTables_wrapper .dataTables_paginate {
            color: white;
        }
    </style>
</head>

<body>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash" style="height: 100%;">
@include('layouts.partials.header')
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one" style="height: 100%;">
        @include('flash-toastr::message')
      @include('layouts.partials.sidebar')
        <div class="dashboard-content-one">
            @yield('content')
            <footer class="footer-wrap-layout1">
                <div class="copyright">© Copyrights <a href="#">SGS</a> 2020. Tous droits réservés. Conçu par <a
                        href="#">CI-BDO</a></div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
{{--<!-- jquery-->--}}
{{--<script src="{{asset('akkhor/js/jquery-3.3.1.min.js')}}"></script>--}}
{{--<!-- Plugins js -->--}}
{{--<script src="{{asset('akkhor/js/plugins.js')}}"></script>--}}
{{--<!-- Popper js -->--}}
{{--<script src="{{asset('akkhor/js/popper.min.js')}}"></script>--}}
{{--<!-- Bootstrap js -->--}}
{{--<script src="{{asset('akkhor/js/bootstrap.min.js')}}"></script>--}}
{{--<!-- Counterup Js -->--}}
{{--<script src="{{asset('akkhor/js/jquery.counterup.min.js')}}"></script>--}}
{{--<!-- Moment Js -->--}}
{{--<script src="{{asset('akkhor/js/moment.min.js')}}"></script>--}}
{{--<!-- Waypoints Js -->--}}
{{--<script src="{{asset('akkhor/js/jquery.waypoints.min.js')}}"></script>--}}
{{--<!-- Scroll Up Js -->--}}
{{--<script src="{{asset('akkhor/js/jquery.scrollUp.min.js')}}"></script>--}}
{{--<!-- Custom Js -->--}}
{{--<script src="{{asset('akkhor/js/main.js')}}"></script>--}}


<!-- jquery-->
<script src="{{asset('akkhor/js/jquery-3.3.1.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('akkhor/js/plugins.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('akkhor/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('akkhor/js/bootstrap.min.js')}}"></script>
<!-- Select 2 Js -->
<script src="{{asset('akkhor/js/select2.min.js')}}"></script>
<!-- Date Picker Js -->
<script src="{{asset('akkhor/js/datepicker.min.js')}}"></script>
<!-- Scroll Up Js -->
<script src="{{asset('akkhor/js/jquery.scrollUp.min.js')}}"></script>
{{--<!-- Data Table Js -->--}}
<script src="{{asset('akkhor/js/jquery.dataTables.min.js')}}"></script>
{{--<!-- Full Calender Js -->--}}
{{--<script src="{{asset('akkhor/js/fullcalendar.min.js')}}"></script>--}}
{{--<!-- Chart Js -->--}}
<script src="{{asset('akkhor/js/Chart.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('akkhor/js/main.js')}}"></script>

<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<script src="{{asset('datatable/js/jquery-3.5.1.js.js')}}"></script>
<script src="{{asset('datatable/js/jquery.dataTables.min.js.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.buttons.min.js.js')}}"></script>
<script src="{{asset('datatable/js/s.js')}}"></script>
<script src="{{asset('datatable/js/pdfmake.min.js.js')}}"></script>
<script src="{{asset('datatable/js/vfs_fonts.js.js')}}"></script>
<script src="{{asset('datatable/js/buttons.html5.min.js.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
            },
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
        $('#example2').DataTable( {
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
            },
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
        $('#example3').DataTable( {
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
            },
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>
@yield('add-js')
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:03 GMT -->
</html>
