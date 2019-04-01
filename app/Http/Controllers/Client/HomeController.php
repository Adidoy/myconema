<?php

namespace App\Http\Controllers\Client;
	

use DB;
use App;
use Hash;
use Auth;
use Carbon;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    public function index()
    {
        return view('client.home.home');
    }
}