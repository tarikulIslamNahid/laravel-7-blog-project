<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quomodosoft.com/html/newsprk/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 13:54:39 GMT -->

<head>
    <title>NewsPrk Dark v2</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('frontend')}}/img/icon/fabicon.png">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/modal-video.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/stellarnav.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/theme.css">
</head>

<body class="dark-theme primay_bg">

  {{-- menu & top bar --}}
@include('frontend.layouts.header')
  {{-- menu & top bar --}}
  @yield('content')

 {{-- footer area --}}
 @include('frontend.layouts.footer')
 {{-- footer area --}}


    <script src="{{asset('frontend')}}/js/plugins/jquery.2.1.0.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.nav.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery.waypoints.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/jquery-modal-video.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/owl.carousel.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/popper.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/circle-progress.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/wow.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/slick.min.js"></script>
    <script src="{{asset('frontend')}}/js/plugins/stellarnav.js"></script>
    <script src="{{asset('frontend')}}/js/main.js"></script>

</body>

</html>
