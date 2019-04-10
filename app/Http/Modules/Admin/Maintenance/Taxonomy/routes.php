<?php

namespace App\Http\Modules\Admin\Maintenance\Taxonomy;

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
            Route::prefix('admin/maintenance')->group(function() {
                Route::get('phylum', 'maintenance\taxonomy\PhylumController@setup');
            });
        });
    }
}