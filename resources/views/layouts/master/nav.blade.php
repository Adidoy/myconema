<style>
    .banner {
        background-color:#021215;
        max-height:500px;
        width:100%;
        color: white;
    }
    .banner h1 {
        font-size:2.75vw; 
        font-family:'Roboto Thin';
        margin-top:0px;
        margin-bottom:10px;
        white-space: nowrap;
    }
    .banner h3 {
        font-size:0.75vw; 
        font-family:'Roboto Thin';
        margin-bottom:0px;
        margin-top:10px;
        padding-left:0.25vw;
        white-space: nowrap;
    }
    .banner img {
        height:4vw; 
        width:4vw;
    }
    .navbar {
        padding:0px;
        margin-top:5px;
        margin-bottom:0;
        border-radius: 0px;
        background:#041a1f;        
        color:#ffffff;
        width:100%;
    }
    .navbar a {
        color: #ffffff;
        font-family: 'Roboto Thin';
        font-size:11pt;
    }
    .navbar-nav > li > a:hover {
        background:#fffff;
    }
</style>

<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="padding:0px; margin:0px;">
                <nav class="navbar navbar-expand-lg" style="padding:0px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="padding:0px;">
                        <span class="navbar-brand visible-xs">MycoNema Bank</span>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">&emsp;&emsp;&emsp;<i class="fa fa-home"></i>&nbsp; Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">&emsp;<i class="far fa-address-card"></i>&nbsp; About &nbsp;</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/articles') }}">&emsp;<i class="far fa-newspaper"></i>&nbsp; Articles &nbsp;</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/registration') }}">&emsp;<i class="far fa-clipboard"></i>&nbsp; Registration &nbsp;</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/search') }}">&emsp;<i class="fas fa-search"></i>&nbsp; Search &nbsp;</a></li>
                        </ul>
                        <ul class="navbar-nav" style="float:right;">
                            <li><a class="nav-link" href="{{ url('/sign-up') }}"><i class="fas fa-user-plus"></i>&nbsp; Sign Up &nbsp;</a></li>&emsp;
                            <li><a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-user-tie"></i>&nbsp; Login &nbsp;</a></li>&emsp;&emsp;&emsp;
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
