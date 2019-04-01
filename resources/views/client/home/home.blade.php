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
</style>

@section('content')
    <div class="container-fluid" id="page-body">
        <div class="row">
            <div class="col-md-2">
                <br />
            </div>
            <div class="col-md-8" style="padding-top:20px;">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <img src="{{ asset('images/mn-logo.png') }}" class="logo" />
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/ched.png') }}" style="height:120px;"/>

                        <img src="{{ asset('images/dare-to.png') }}" />

                        <img src="{{ asset('images/k12-trans.png') }}" style="height:120px;"/>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br />
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-12">
                        <div><h1 style="font-family:'Roboto Regular'">MycoNema Bank</h1></div>
                        <br />
                        <p class="text-justify">
                            The <span style="font-famliy:'Roboto Regular'; font-weight:bold;"> MycoNema Bank </span> is a collection of fungal pathogens and nematological species and their given information. 
                            Using this databank, users can search from the registered fungal pathogens and nematological species or register new species to be added to the databank. 
                            Also, the user can search using the names and/or scientific names of the species as such, additional conditions may be added in order to have a more advanced searching. 
                            The advanced searching has a feature of either choosing a general or a specific condition. <br /> <br />

                            It is an online data storage for the fungal and parasitic nematodes species that will be identified from this project. 
                            This endeavor attempts to serve as Philippine-wide storage for all the fungal pathogens and parasitic nematodes that can be isolated from other Philippine plants and will be made available 
                            free of charge regardless of the physical location of the researchers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                &nbsp;
            </div>        
    </div>
    </div>
@endsection