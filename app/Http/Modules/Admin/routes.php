<?php

namespace App\Http\Modules\Admin;

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
        Route::namespace('admin')->group(function() {
            Route::prefix('admin')->group(function() {
                Route::get('home', 'HomeController@index');
            });
        });
    }
}