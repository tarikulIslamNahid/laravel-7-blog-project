<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from quomodosoft.com/html/newsprk/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jun 2021 13:54:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title') </title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin')}}/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/css/forms/switches.css">
</head>

<body class="form">

@yield('content')

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin')}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{asset('admin')}}/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('admin')}}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin')}}/assets/js/authentication/form-1.js"></script>

</body>

</html>
