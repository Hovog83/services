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
    Route::any('/login/active/{token}', ['uses' => 'UserController@active']);
    Route::any('/user', ['uses' => 'UserController@userAccount']);
    Route::any('/reset', ['uses' => 'UserController@reset']);
    Route::any('/logout', ['uses' => 'UserController@logout']);
    Route::any('/user/reset', ['uses' => 'UserController@logout']);
    Route::any('/password/reset/{token}', ['uses' => 'UserController@changePassword']);

});
Route::group([
    'namespace' => 'back',
    'middleware' => ['web','admin'],
], function () {
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
