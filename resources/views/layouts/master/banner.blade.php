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
</style>

<div class="banner">
    <div class="hidden-xs">
        <div class="row align-items-center">
            <div class="col-md-1">
                <br />
            </div>    
            <div class="col-md-1 text-center">
                <img src="{{ asset('images/logo.png') }}" />
            </div>
            <div class="col-md-10 text-left">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="no-gutters">Polytechnic University of the Philippines</h3>
                        <h1 class="no-gutters">MycoNema Bank</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
