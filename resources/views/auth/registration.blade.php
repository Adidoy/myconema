@extends('layouts.master.master')
<title>
    Sign Up |  {{ isset($title) ? $title.' :: '.config('app.name') : config('app.name') }}
</title>
@section('content')
    <div class="container-fluid" id="page-body">
        <div class="row">
            <div class="col-md-2">
                <br />
            </div>
            <div class="col-md-8">
                <h1 style="font-family:'Roboto Regular'">Create an Account</h1>
            </div>
            <div class="col-md-2">
                <br />
            </div>          
        </div>
        <div class="row">
            <div class="col-md-2">
                <br />
            </div>
            <div class="col-md-8">
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul class="list-unstyled" style='margin-left: 10px;'>
                                @foreach ($errors->all() as $error)
                                    <li class="text-capitalize">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        {{ Form::open(array('action' => 'Authentication\RegistrationController@store', 'method' => 'post')) }}
                        <div class="col-md-12">
                            <h3>Account Details</h3>
                            <br />
                            {{ Form::label('firstname','First Name') }}
                            {{ Form::text('firstname',Input::old('firstname'),[
                                'class' => 'form-control',
                                'id' => 'firstname',
                                'placeholder' => 'First Name'
                            ]) }}
                            <br />
                            {{ Form::label('middlename','Middle Name') }}
                            {{ Form::text('middlename',Input::old('middlename'),[
                                'class' => 'form-control',
                                'id' => 'middlename',
                                'placeholder' => 'Middle Name'
                            ]) }}
                            <br />
                            {{ Form::label('lastname','Last Name') }}
                            {{ Form::text('lastname',Input::old('lastname'),[
                                'class' => 'form-control',
                                'id' => 'lastname',
                                'placeholder' => 'Last Name'
                            ]) }}
                            <br />
                            {{ Form::label('institution','Institution') }}
                            {{ Form::text('institution',Input::old('institution'),[
                                'class' => 'form-control',
                                'id' => 'institution',
                                'placeholder' => 'Institution'
                            ]) }} 
                            <br />
                            {{ Form::label('access','Designation') }}
                            {{ Form::select('access', App\Models\Authentication\UserData::$clientType,Input::old('access'),[
                                'class'=>'form-control'
                            ]) }}                           
                            <br /> <br />
                        </div>
                        <div class="col-md-12">
                            <h3>Account Credentials</h3>
                            <br />
                            {{ Form::label('email','Email Address') }}
                            {{ Form::text('email',Input::old('email'),[
                                'class' => 'form-control',
                                'id' => 'email',
                                'placeholder' => 'Email Address'
                            ]) }}
                            <br />
                            {{ Form::label('password','Password') }}
                            {{ Form::password('password',[
                                'class' => 'form-control',
                                'placeholder' => 'Password'
                            ]) }}
                        </div>    
                        <div class="col-md-12">
                            <br /><br />
                            <!-- {{ Form::submit('Sign Up',[
                                'class' => 'btn btn-lg btn-primary btn-block',
                                'id' => 'submit'
                            ]) }} -->
                            {{ Form::button('<i class="glyphicon glyphicon-ok">Submit</i>', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block'] )  }}
                            <!-- <button class="btn btn-lg btn-primary btn-block" id="submit" type="button" value="Sign Up"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; &nbsp; Sign Up</button> -->
                        </div>                    
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <br />
            </div>
        </div>
    </div>
@endsection
@section('additional-scripts')
<script>
	jQuery(document).ready(function() {
        $(document).ready(function(){
            $('#submit').on('click',function(){
                swal({
                    title: "Account Registration",
                    text: "Your account will be created. Continue?",
                    type: "warning",
                    showCancelButton: true,
                    // confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, submit my details",
                    closeOnConfirm: false
                },
                function(isConfirm){
                    if (isConfirm){
                        swal("Account Created!", "Your account is now created!", "success");
                        $('#registrationForm').submit();
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                })
            })
        })
    })
</script>
@endsection