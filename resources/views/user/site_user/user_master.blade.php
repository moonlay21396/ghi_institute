<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<link rel="icon" type="image/png" href="{{asset('images/admin_image/ghi.png')}}">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/bootstrap.css')}}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/shortcodes.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/colors/color1.css')}}" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="#" rel="shortcut icon">
     
    <!-- Fontawesome  -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Toastr notification -->
    <link rel="stylesheet" type="text/css" href="{{url('css/toastr.min.css')}}">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
    <style>
        .flat-events .grid-item2 {
            display: inline-block;
            float: left;
            width: 75%;
        }
        .pill-right{
            border-right: 1px solid #777;
        }
        @media(max-width: 991px){
            .pill-right{
                border-right: 1px solid transparent;
            }   
        }
    </style>
    @yield('css')
</head>

<body class="header-sticky">

    <div class="boxed">

        @include('user.site_user.user_header')

        @yield('content')

       @include('user.site_user.user_footer')

        <!-- Javascript -->
        <script type="text/javascript" src="{{asset('user/javascript/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/jquery.easing.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/smoothscroll.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/owl.carousel.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/parallax.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/jquery.tweet.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/jquery-validate.js')}}"></script> 
        <script type="text/javascript" src="{{asset('user/javascript/jquery-waypoints.js')}}"></script>

        <!-- Revolution Slider -->
        <script type="text/javascript" src="{{asset('user/javascript/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/slider.js')}}"></script>
       <!--  <script type="text/javascript" src="javascript/switcher.js"></script>  -->
        <script type="text/javascript" src="{{asset('user/javascript/jquery.cookie.js')}}"></script>
        <script type="text/javascript" src="{{asset('user/javascript/main.js')}}"></script>

            <!-- Toastr notification -->
            <script type="text/javascript" src="{{url('js/toastr.min.js')}}"></script>
        @yield('js')
    </div>
</body>
</html>