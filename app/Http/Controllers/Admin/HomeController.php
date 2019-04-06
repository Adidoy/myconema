<?php

namespace App\Http\Controllers\Admin;
	
use Auth;
use Hash;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller 
{
    public function index()
    {
        return view('admin.home');
    }
}