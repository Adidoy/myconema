<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

App\Http\Modules\Client\Routes::all();
App\Http\Modules\Auth\Routes::all();
App\Http\Modules\Admin\Routes::all();
// App\Http\Modules\Admin\Maintenance\Taxonomy\Routes::all();

