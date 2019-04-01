@extends('layouts.master.master')
@section('content')
    <div class="container-fluid" id="page-body">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="panel panel-default" id="loginPanel">
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
            </div>
        </div>
        <div class="row" style="margin-top:2%">
            <div class="col-md-12">
                <div style="float:right; padding-right:50px; padding-top:50px;">
                    <img src="{{ asset('images/mn-logo.png') }}" style="height:7vw; width:auto;" />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts-include')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#login-button").click(function() {
                var $btn = $(this);
                $btn.button('loading');

                setTimeout(function () {
                    $btn.button('reset');
                }, 1000);
            });
        })
    </script>
@endsection