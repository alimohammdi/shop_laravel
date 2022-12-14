<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />

    {{--    script for sweet alert--}}
    <script src="{{ asset('js/app.js') }}"></script>

    <title>@yield('title')</title>
    {!!  SEO::generate(true) !!}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/now-ui-kit.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/plugins/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/plugins/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body class="index-page sidebar-collapse">

<!-- responsive-header -->
@include('front.partials.header-response')

<!-- responsive-header -->

<div class="wrapper default">

    <!-- header -->
    @include('front.partials.header')
    <!-- header -->
        @yield('content')

    {{-- start   footer --}}
    @include('front.partials.footer')
    {{-- end   footer --}}
</div>

</body>
{{--@include('sweet::alert')--}}
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="{{ asset('assets/js/plugins/jquery.sharrre.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/now-ui-kit.js')}}" type="text/javascript"></script>
<!--  CountDown -->
<script src="{{ asset('assets/js/plugins/countdown.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Sliders -->
<script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}" type="text/javascript"></script>
<!--  Jquery easing -->
<script src="{{ asset('assets/js/plugins/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>
<!-- Main Js -->
<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
@yield('js')
</html>
