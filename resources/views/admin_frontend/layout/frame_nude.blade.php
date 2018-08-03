<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="www.kioskorea.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminPage | Kios Korea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="{{ asset('frontend/images/icon.png') }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/css/app.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/css/fontastic.css') }}">
   {{--  <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> --}}
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_frontend/css/custom.css') }}">
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>

    <div class="page login-page">

        @yield('main-section')

    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('admin_frontend/js/app.js') }}"></script>
    <script src="{{ asset('admin_frontend/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('admin_frontend/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin_frontend/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_frontend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_frontend/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin_frontend/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('admin_frontend/js/front.js') }}"></script>
  </body>
</html>
