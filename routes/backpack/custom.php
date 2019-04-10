<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes
    CRUD::resource('maintenance/phylum', 'Admin\Maintenance\Taxonomy\PhylumCrudController');
    CRUD::resource('maintenance/kingdom', 'Admin\Maintenance\Taxonomy\KingdomCrudController');
}); // this should be the absolute last line of this file