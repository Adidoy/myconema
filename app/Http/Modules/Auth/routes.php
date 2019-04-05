<?php

namespace App\Http\Modules\Auth;

use Illuminate\Support\Facades\Route;

class Routes
{

    /**
     * Return all the routes available to this class
     *
     * @return void
     */
    public static function all()
    {
        Route::get('/login', 'Authentication\LoginController@index');
        Route::post('/login', [
            'as' => 'login',
            'uses'=>'Authentication\LoginController@login'
        ]); 
        Route::get('/sign-up', 'Authentication\RegistrationController@create');
        Route::post('/sign-up', [
            'as' => 'registration',
            'uses' => 'Authentication\RegistrationController@store'
        ]);
    }
}