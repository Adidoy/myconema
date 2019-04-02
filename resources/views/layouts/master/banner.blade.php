<style>
    .banner {
        background-color:#021215;
        max-height:500px;
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
        margin-top:12px;
    }
    .navbar {
        padding:0px;
        margin-top:5px;
        margin-bottom:0;
        border-radius: 0px;
        background:#041a1f;        
        color:#ffffff;
        width:100vw;
    }
    .navbar a {
        color: #ffffff;
        font-family: 'Roboto Thin';
        font-size:11pt;
    }
    .navbar-brand {
        vertical-align:inherit;
    }
    
</style>

<div class="banner no-gutters">
    <div class="row hidden-xs text-center no-gutters">
        <div class="col-md-1 text-center no-gutters">
            <br />
        </div>    
        <div class="col-md-1 text-center no-gutters">
            <img src="{{ asset('images/logo.png') }}" />
        </div>
        <div class="col-md-10 text-left">
            <div class="row">
                <div class="col-md-12 no-gutters">
                    <h3 class="no-gutters">Polytechnic University of the Philippines</h3>
                    <h1 class="no-gutters">MycoNema Bank</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-md-12 no-gutters">
            <nav class="navbar navbar-expand-lg no-gutters">
                <span class="navbar-brand visible-xs-block text-center no-gutters" href="{{ url('/') }}">MYCONEMA BANK</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#ffffff;">
                    <span class="navbar-toggler-icon" style="color:#000000;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:0px;">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp; Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-address-card"></i>&nbsp; About MycoNema &nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-newspaper"></i>&nbsp; Articles &nbsp;</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-clipboard"></i>&nbsp; Registration &nbsp;</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link" href="{{ url('/sign-up') }}"><i class="fas fa-user-plus"></i>&nbsp; Sign Up &nbsp;</a></li>
                        <li><a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-user-tie"></i>&nbsp; Login &nbsp;</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
