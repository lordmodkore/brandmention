<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <title>Brand Mention | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- page stylesheets -->
    <!-- end page stylesheets -->
    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link href="{{ asset('css/webfont.css') }}" rel="stylesheet">
    <link href="{{ asset('css/climacons-font.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sli.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- endbuild -->
  </head>
  <body class="page-loading">
    <div class="pageload">
      <div class="pageload-inner">
        <div class="sk-rotating-plane"></div>
      </div>
    </div>
    <div class="app signin usersession">
      <div class="session-wrapper">
        @yield('content')
      </div>
    </div>
    <script src="{{ asset('js/helpers/modernizr.js') }}"></script>
    <script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('js/helpers/smartresize.js') }}"></script>
    <script src="{{ asset('js/constants.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  <!-- end initialize page scripts -->
  </body>
</html>