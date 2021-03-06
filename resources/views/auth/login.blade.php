@extends('layouts.master.master')
<title>
    Login |  {{ isset($title) ? $title.' :: '.config('app.name') : config('app.name') }}
</title>
@section('content')
    <div class="container-fluid" id="page-body">
        <div class="row">
            <div class="col-md-4" style="margin:0px; padding:0px;">
                <br />
            </div>
            <div class="col-md-4" style="margin:0px; padding:0px;">
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
                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="{{ url('admin/login/') }}">
                                        Login as Admin
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4" style="margin:0px; padding:0px;">
                <br />
            </div>
            
        </div>
        <div class="row">
                <br />
            </div>
    </div>
@endsection