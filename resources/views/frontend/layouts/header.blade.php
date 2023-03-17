<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>primehive</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
</head>

<body>
    <div class="wrapper">
        <!-- /header start -->
        <header class="top-header">
            <div class="center">
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('frontend/images/primhivelogo.png') }}"
                        alt=""></a>
                <div id="toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <div id="menu" class="header-signup-pannel">
                    <a href="{{ url('/login') }}" title="">Log In</a>
                    <a href="{{ url('/register') }}" title="">Sign Up</a>
                    <a href="{{ url('/register') }}" title="" class="join-as"><img
                            src="{{ url('frontend/images/join-icon.png') }}" alt=""> Join as a Service
                        Provider</a>
                </div>
            </div>
        </header>
        <!-- /header end -->
