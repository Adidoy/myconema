<?php

namespace App\Http\Controllers\Authentication;
	
use Auth;
use Hash;
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
            if(Auth::user()->access <= 2) {
                return redirect('/admin/home');
            } else {
                return redirect('/');    
            }
			
		}
		else {
			return back()->withInput()->withErrors(["Invalid Credentials Submitted." ]);
		}
    }
}