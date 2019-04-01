<?php

namespace App\Http\Controllers\Authentication;

use DB;
use Hash;
use Session;
use Validator;
use App\Models\Authentication\User;
Use App\Models\Authentication\UserData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller 
{
    public function create()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {
        $user = new User;
        $userData = new UserData;

        $lastName = $request->get("lastname");
        $firstName = $request->get("firstname");
        $middleName = $request->get("middlename");
        $institution = $request->get("institution");
        $designation = $request->get("access");
        $email = $request->get("email");
        $password = $request->get("password");

        $validator = Validator::make([
            'Last Name' => $lastName,
			'First Name' => $firstName,
            'Institution' => $institution
        ],$userData->rules(),$userData->messages());

        if($validator->fails()) {
			return redirect('/sign-up')
				->withInput()
				->withErrors($validator);
        }
        
        $validator = Validator::make([
            'Email' => $email,
			'Password' => $password
        ],$user->rules(),$user->messages());

        if($validator->fails()) {
			return redirect('/sign-up')
				->withInput()
				->withErrors($validator);
		}

        DB::beginTransaction();
            $userData = UserData::create([
                'lastname' => $lastName,
                'firstname' => $firstName,
                'middlename' => $middleName,
                'institution' => $institution,
                'designation' => $designation
            ]);
            $user = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'user_id' => $userData->id
            ]);
        DB::commit();
    }
}