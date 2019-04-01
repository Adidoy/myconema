<?php

namespace App\Http\Modules\Client;

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
        Route::get('/', [
            'as' => 'home',
            'uses'=>'Client\HomeController@index'
            ]); 
    }
}