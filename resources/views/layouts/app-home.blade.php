<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/settings.css') }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <title>Home Version 3</title>
</head>
<body>


@include('inc.header')


@yield('content')


@include('inc.footer')




<!-- End wrappage -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/engo-plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('http://maps.googleapis.com/maps/api/js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/map-icons.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/store.js') }}"></script>
</body>
</html>
