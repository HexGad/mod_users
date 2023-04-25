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

use HexGad\Users\Http\Controllers\UsersController;
use \Illuminate\Support\Facades\Route;

Route::prefix(config('dashboard.urls.prefix'))
    ->as(config('dashboard.urls.route_prefix'))
    ->middleware('auth:dashboard')
    ->group(function () {
        Route::resource('users', UsersController::class);
    });
