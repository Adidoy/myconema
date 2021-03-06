<?php

namespace App\Models\Authentication;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'email', 'password', 'access',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['name'];

    public function rules()
    {
        return [
			'Email' => 'email|required',
			'Password' => 'required|min:10'
        ];
    }

    public static $signUpAccess = [
        3 => "Student",  
		4 => "Faculty Member",
		5 => "Researcher"
    ];

    public static $access = [
        0 => 'System Administrator',
		1 => "Administrator",
		2 => "Content Manager",
		3 => "Data Bank Manager",
		4 => "Student",  
		5 => "Faculty Member",
		6 => "Researcher"
	];

    public function messages()
    {
        return [
			'Email.required' => 'Email Address is required.',
            'Password.required' => 'Password is required.',
            'Email.email' => 'Please enter a valid email address.',
            'Password.min' => 'Minimum number of password characters is 10.',
        ];
    }

    public function getAccessNameAttribute($value)
	{
		return User::$access[ $this->access ];
    }
    
    public function getNameAttribute()
    {
        return $this->UserData->name;
    }

    public function UserData()
    {
        return $this->belongsTo('App\Models\Authentication\UserData', 'user_id');
    }
}
