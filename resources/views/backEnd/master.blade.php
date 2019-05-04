<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RvMedia - Laravel Media Management</title>
    <meta name="description" content="RvMedia is used to manage media in Laravel project, it can works with Laravel 5.x and easy to setup. You will have many features with this media management.">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <meta property="og:image" content="{{ url('images/banner.png') }}">
    <meta property="og:description" content="RvMedia is used to manage media in Laravel project, it can works with Laravel 5.x and easy to setup. You will have many features with this media management.">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #eee !important;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        body .navbar-default {
            background-color: #3097d1;
            border-color: #2984b7;
            border-radius: 0;
            position: relative;
            min-height: 50px;
            color: #fff;
            z-index: 9999;
            margin-bottom : 0;
        }
        body .navbar-default .navbar-brand,
        body .navbar-default .nav > li > a {
            color: #fff !important;
        }

        body .navbar-default .nav > li > a:hover {
            color: #c9e2f9 !important;
        }
        .main-content-wrapper {
            max-width: 700px;
            margin: 50px auto;
        }
        .main-content-wrapper .btn.btn-info {
            margin-bottom : 10px;
        }
        #docs-navbar .btn-group {
            margin-top : 9px;
        }
        #docs-navbar .btn-group .dropdown-toggle {
            border: none !important;
            background: none !important;
            box-shadow: none !important;
            color: #fff !important;
            font-family: 'Raleway', sans-serif;
        }
        #docs-navbar .dropdown-menu {
            -webkit-border-radius : 0;
            -moz-border-radius    : 0;
            border-radius         : 0;
        }
        @media (min-width: 768px) {
            .modal-dialog {
                margin : 90px auto !important;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#docs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand">RvMedia</a>
        </div>
        <div id="docs-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://goo.gl/BTYHda" target="_blank">Purchase</a></li>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="?locale=en">English</a></li>
                        <li><a href="?locale=vi">Vietnamese</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>