<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ecommerce web site</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href={{asset('assets/img/logo/lg.ico')}}>
    
        <!-- CSS
        ========================= -->
    
        <!-- Plugins CSS -->
        <link rel="stylesheet" href={{asset('assets/css/plugins.css')}}>
    
        <!-- Main Style CSS -->
        <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/shop.css')}}>
    
    </head>
        
<body>
  @yield('content')
  
    <!--news letter popup start-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
    <script  src="https://www.google.com/jsapi"></script>
    <script src="assets/js/map.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src={{asset('assets/js/plugins.js')}}></script>

<!-- Main JS -->
<script src={{asset('assets/js/main.js')}}></script>

</body>

</html>