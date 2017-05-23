<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-overlay-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/login-register.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/iransans.css') }}">
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">

    @yield('content')

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
</body>
</html>
