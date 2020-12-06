<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    {{--    website tab logo...--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/consult_brand.jpg')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
        @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    {{--    stylesheet lLinks...--}}
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/css/line-awesome-font-awesome.css')}}"
    <link rel="stylesheet" href="{{asset('assets/admin/fonts/line-awesome/fonts/line-awesome.svg')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/plugins/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleRegister.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    {{--    script lLinks...--}}

    <script src="{{asset('assets/admin/js/core/libraries/jquery.min.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('assets/admin/js/core/libraries/bootstrap.min.js')}}"></script>



    <link rel="stylesheet" href="{{asset('style/bootstrap-4/css/bootstrap.min.css')}}">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('user.includes.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->


@yield('content')

<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('user.includes.footer')



@yield('script')
<script src="{{asset('js/plugin.js')}}"></script>

</body>
</html>
