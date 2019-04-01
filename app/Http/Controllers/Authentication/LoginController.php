<?php

namespace App\Http\Controllers\Authentication;
	

use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller 
{
    public function index()
    {
        return view('auth.login');
    }
}