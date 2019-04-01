<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>
            {{ isset($title) ? $title.' :: '.config('app.name') : config('app.name') }}
        </title>

        <!-- Bootstrap -->
        <!-- {{ HTML::style(asset('css/jquery-ui.css')) }} -->
        {{ HTML::style(asset('css/bootstrap.min.css')) }}
        {{ HTML::style(asset('css/sweetalert.css')) }}
        {{ HTML::style(asset('css/dataTables.bootstrap.min.css')) }}
        {{ HTML::script(asset('js/jquery-3.3.1.min.js')) }}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        @yield('additional-scripts')
        <style>
            @font-face {
                font-family: 'Roboto Thin';
                src: url('fonts/roboto/Roboto-Thin.ttf');
            }
            @font-face {
                font-family: 'Roboto Regular';
                src: url('fonts/roboto/Roboto-Regular.ttf');
            }
            @font-face {
                font-family: 'Roboto Medium';
                src: url('fonts/roboto/Roboto-Medium.ttf');
            }
            body {
                font-family: 'Roboto Thin';
                color:#000000;
                font-size:14pt;
                font-weight:bold;
                background: #ffffff;
            }
            #banner {
                background:#041a1f; 
                max-height:7vw;
                color: white;
            }
            #banner-header-1 {
                font-size:1vw; 
                font-family:'Roboto Thin';
                margin-bottom:0px;
                margin-top:0px;
                padding-left:0.25vw;
            }
            #banner-header-2 {
                font-size:4vw; 
                font-family:'Roboto Thin';
                margin-top:0px;
                margin-bottom:0px;
            }
            .footer {
                /* background-color:#214850; */
                background-color:#020F12;
                color: #ffffff;
                text-align: center;
            }
            .center {
                margin: 0px;
                padding-top: 0.75vw;
                padding-bottom:0.75vw;
            }
            .navbar {
                background-color:#1d3034;
                border-radius: 0px;
                border-color: #08080800;
            }
            .navbar a {
                color: #ffffff;
                font-family: 'Roboto Regular';
                font-size:12pt;
            }
            .navbar-inverse .navbar-nav > li > a {
                color: #ffffff;
            }
            .navbar-inverse .navbar-nav > li > a:hover {
                background-color: #09353e;
            }
            .navbar-inverse .navbar-brand {
                color: #ffffff;
            }
            .navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover {
                color: #fff;
                background-color:#09353e;
            }
            .navbar a:hover {
                color: #ffffff;
                background-color:#09353e;
            }
            .navbar-right > li > a:hover {
                color: #ffffff;
                background-color:#09353e;
            }
            .navbar-nav > li > a:hover {
                color: #ffffff;
                background-color:#09353e;
            }            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row  navbar-fixed-top" id="banner">
                <div class="row" style="margin-left:1%">
                    <div class="col-md-1" style="display:inline-block; text-align:center; position:absolute; ">
                        <div class="center">
                            <img src="{{ asset('images/logo.png') }}" style="height:5.25vw; width:5.25vw;"/>
                        </div>
                    </div>
                    <div class="col-md-5" style="display:inline-block; position:relative; padding-left:8%;">
                        <div class="center">
                            <h5 id="banner-header-1">Polytechnic University of the Philippines</h5>
                            <h6 id="banner-header-2">MycoNema Bank</h6>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:inline-block;">
                        <img src="{{ asset('images/mnp-banner.png') }}" style="height:7vw; width:55vw;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid" style="margin-right:3%;">
                                <div class="navbar-header" style="margin-left:3%;">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> 
                                    </button>
                                    <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home" style="font-size:14pt;"></i>&nbsp; Home</a>
                                </div>
                                    <div class="collapse navbar-collapse" id="myNavbar" style="margin-left:3%;">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#"><i class="far fa-address-card" style="font-size:14pt;"></i>&nbsp; About MycoNema &nbsp;</a></li>
                                        <li><a href="#"><i class="far fa-newspaper" style="font-size:14pt;"></i>&nbsp; Articles &nbsp;</a></li>
                                        <li><a href="#"><i class="far fa-clipboard" style="font-size:14pt;"></i>&nbsp; Registration &nbsp;</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{ url('/sign-up') }}"><i class="fas fa-user-plus" style="font-size:14pt;"></i>&nbsp; Sign Up &nbsp;</a></li>
                                        <li><a href="{{ url('/login') }}"><i class="fas fa-user-tie" style="font-size:14pt;"></i>&nbsp; Login &nbsp;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:230px; margin-bottom:230px;">
                @yield('content')
            </div>
            <div class="row footer">
                <div class="col-md-4">
                <h4 class="text-left" style="text-align:left; font-size:14pt; color:#ffffff; padding-top:15px; margin-left:25px;">Links</h4>
                        <ul style="text-align:left; font-size:11pt; color:#ffffff; margin-left:25px;">
                            <li><a href="{{ url('/') }}" style="color:#ffffff;">Home</a></li>
                            <li><a href="{{ url('/about') }}" style="color:#ffffff;">About MycoNema</a></li>
                            <li><a href="{{ url('/articles') }}" style="color:#ffffff;">Articles</a></li>
                            <li><a href="{{ url('/register') }}" style="color:#ffffff;">Registration</a></li>
                            <li><a href="{{ url('/sign-up') }}" style="color:#ffffff;">Sign Up</a></li>
                            <li><a href="{{ url('/login') }}" style="color:#ffffff;">Login</a></li>
                        </ul>   
                    </div>
                    <div class="col-md-4">
                        Content goes here...  
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-left" style="text-align:left; font-size:14pt; color:#ffffff; padding-top:15px; margin-left:25px;">External Links</h4>
                        <ul style="text-align:left; font-size:11pt; color:#ffffff; margin-left:25px;">
                            <li><a href="{{ url('https://ched.gov.ph/') }}" target="_blank" style="color:#ffffff;">Commission on Higher Education</a></li>
                            <li><a href="{{ url('https://chedk12.wordpress.com/dareto/') }}" target="_blank" style="color:#ffffff;">CHED K-12 Transition Program: DARE TO Grant</a></li>
                        </ul>  
                    </div>
                </div>
                <div class="row footer">
                    <div class="col-md-12">
                            <h6 style="padding:0px; margin:0px;">Polytechnic University of the Philippines -  MycoNema Project</h6>
                    </div>
                </div>
                <div class="row footer">
                    <div class="col-md-12">
                        <h6 style="padding:0px; margin:0px;">MycoNema Bank © 2018</h6>
                    </div>
                </div>
                <div class="row footer">
                    <div class="col-md-12">
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>