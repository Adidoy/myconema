@extends('layouts.master.master')

<title>
    Home |  {{ isset($title) ? $title.' :: '.config('app.name') : config('app.name') }}
</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
    .logo {
        width:700px;
        height:320px;
        text-align:center;
    }
    .content {
        width:100%;
    }
</style>

@section('content')
    <div class="container-fluid" id="page-body">
        <div class="row content">
            <div class="col-md-2">
                <br />
            </div>
            <div class="col-md-8">
            <div class="panel-body">
                        @include('errors.alert')
                        <form class="form-horizontal" action="{{ url('/login') }}" id="loginForm" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="username"> Username </label>
                                    <input type="text" id="username" class="form-control" value="{{ old('username') }}" name="username" placeholder="Username" required autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">    
                                    <label for="password"> Password </label>
                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" required autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button 
                                        type="submit" 
                                        id="login-button" 
                                        data-loading-text="Logging in..." 
                                        class="btn btn-lg btn-primary btn-block" 
                                        autocomplete="off">
                                            Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="col-md-2">
                <br />
            </div>
        </div>
    </div>
@endsection