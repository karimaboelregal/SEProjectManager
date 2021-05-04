<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>
    <script src="https://kit.fontawesome.com/df4285e61f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/turningbutton.css') }}" rel="stylesheet">

    <style>
        .login {
            margin-top: 100px;
            width: 400px;
            height: 350px;
            background: #FFFFFF;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.30);
        }

        .loginHead {
            width: 100%;
            height: 40px;
            background: #C63E47;
        }

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .inputDesign {
            border: 0px;
            border-bottom: none;
            background: linear-gradient(#C63E47, #C63E47) bottom no-repeat;
            background-size: 50% 2px;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            transition: background-size 0.5s;
        }

        .inputDesign:focus {
            outline: none;
            background: linear-gradient(#C63E47, #C63E47) bottom no-repeat;
            background-size: 100% 2px;

        }

        .custom-control-label:before {
            background-color: #C63E47;
            outline: none;

        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #C63E47;
            outline: none;
        }

        .btn {
            border: 1px solid #C63e47 !important;
            outline: none !important;
            box-shadow: none !important;

        }

        .btn:hover,
        .btn:hover {
            outline: none !important;
            box-shadow: none !important;
            background-color: #C63E47 !important;
        }

        .dropdown-item:hover {
            background-color: #C63E47 !important;

        }

        .navbar a {
            color: white !important;
        }

        .navbar .nav-item:hover {
            box-shadow: inset 0px -5px 0px 0px #C63E47;

        }

        .show {
            box-shadow: inset 0px -5px 0px 0px #C63E47;

        }

        .norms:hover {
            background-color: #f7f7f7 !important;
        }

    </style>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-color:#ffffff;width:100%;">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#525252;height:60px;">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="#">
                Welcome
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                <img src="//placehold.it/40?text=LOGO" alt="logo">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-2 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item" id="home" style="margin-right:5px!important;">
                     <a href="/student_home" class="nav-link m-2 menu-item"><i class="fa fa-home"></i> Home</a>


                </li>
                <li class="nav-item" id="users" style="margin-right:5px!important;">
                    <a href="/student_profile" class="nav-link m-2 menu-item"><i class="fa fa-user"></i> Profile</a>


                </li>
                <li class="nav-item" id="courses" style="margin-right:5px!important;">
                    <a href="/student_team" class="nav-link m-2 menu-item"><i class="fa fa-users"></i> Users</a>


                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -80px !important;">
                        <a class="dropdown-item" href="#" style="color: black !important;" onclick="location.href = 'student_profile'">my profile</a>
                        <a class="dropdown-item" href="#" style="color: black!important;">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main class="py-10">
        @yield('content')
    </main>
    <footer class="row">
        @extends('layouts.footer')
    </footer>
</body>
</html>

