<?php

namespace App\Http\Controllers\Authentication;
	
use Auth;
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

    public function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        $user_information = [
			'email' => $username,
			'password' => $password
		];

        if(Auth::attempt($user_information)) {
			return view('admin.home');
		}
		else {
			return back()->withInput()->withErrors(["Invalid Credentials Submitted." ]);
		}
    }
}