<?php

use Illuminate\Http\Request;
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

$controller = 'App\Http\Controllers';

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'auth'], function () use($controller) {
    Route::group(['middleware' => 'jwt.verify'], function () use($controller) {
        Route::get('me',$controller.'\Api\AuthController@me');
    });
    Route::post('login',$controller.'\Api\AuthController@login');
    Route::post('register',$controller.'\Api\AuthController@register');
});
