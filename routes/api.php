<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Users')->group(function(){
    Route::get('user', 'UserController@index');
});

//Route::get('users', 'MileageApi\Http\Controllers\Users\UserController@index');
