<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/customs.css')}}" rel="stylesheet">



    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="images/{{$settings->favicon}}">


    <!--- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <![endif]-->

    <style id="custom-style">

    </style>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                @if($signed_in)
                                <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">My Favourites</a></li>
                                        <li><a href="#">My Orders</a></li>
                                        <li><a href="#">Setings</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                    <li><a href="{{route('login')}}" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                     <li class="mega-menu-container"><a href="{{route('login')}}" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                @endif
                                    <li><a href="cart.html" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">

                            {{--<div class="header-top-dropdowns pull-right">
                               <div class="btn-group dropdown-money">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a></li>
                                        <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a></li>
                                    </ul>
                                </div><!-- End .btn-group -->
                                <div class="btn-group dropdown-language">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="flag-container"><img src="images/england-flag.png" alt="flag of england"></span>
                                        <span class="hide-for-xs">English</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="flag-container"><img src="images/italy-flag.png" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="images/spain-flag.png" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="images/france-flag.png" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                        <li><a href="#"><span class="sm-separator"><img src="images/germany-flag.png" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                    </ul>
                                </div><!-- End .btn-group -->
                            </div><!-- End .header-top-dropdowns --> --}}

                            <div class="header-text-container pull-right">
                                @if($signed_in)
                                <h6 class="header-text">Welcome, {{$user->lname}}</h6>
                                @else
                                    <p class="header-text">Welcome to Flanco!</p>
                                    <p class="header-link"><a href="{{route('login')}}">login</a>&nbsp;or&nbsp;<a href="{{route('register')}}">create an account</a></p>
                                @endif
                            </div><!-- End .pull-right -->
                        </div><!-- End .header-top-right -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #header-top -->

        <div id="inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <a href="{{route('home')}}" title="Mereu aproape!"><img src="images/{{$settings->logo}}" alt="Mereu aproape!" width="220" height="85"></a>
                        </h1>
                    </div><!-- End .col-md-5 -->
                    <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">

                        <div class="header-box contact-infos pull-right">
                            <ul>
                                <li><span class="header-box-icon header-box-icon-skype"></span>{{$settings->alternative_contact}}</li>
                                <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
                            </ul>
                        </div><!-- End .contact-infos -->

                        <div class="header-box contact-phones pull-right clearfix">
                            <span class="header-box-icon header-box-icon-earphones"></span>
                            <ul class="pull-left">
                                <li>{{$settings->phone}}</li>
                                <li> {{$settings->other_phone}}</li>
                            </ul>
                        </div><!-- End .contact-phones -->

                    </div><!-- End .col-md-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->