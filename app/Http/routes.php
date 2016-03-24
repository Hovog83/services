<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'front\IndexController@index']);
Route::group([
    'namespace' => 'front',
    'middleware' => 'web'
], function () {
    Route::any('/auth', ['uses' => 'UserController@auth']);
    Route::any('/login/active/{token}', ['uses' => 'UserController@activeLogin']);
    Route::any('/user/account', ['uses' => 'UserController@userAccount']);
    Route::any('/verify', ['uses' => 'UserController@verify']);

    //AuthController


});
Route::group(['namespace' => 'back'], function () {
    Route::any('/admin', ['uses' => 'IndexController@index']);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
