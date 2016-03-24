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



Route::group([
    'namespace' => 'back',
    'prefix'    => 'admin'
], function () {
    Route::group(['middleware' => ['web','admin']], function () {
        /*IndexController*/
        Route::get('/', [
            'uses' => "IndexController@index",
            'as'   => 'admin.index.index'
        ]);        
        /*CategorieController*/
        Route::get('/categorie', [
            'uses' => "CategorieController@index",
            'as'   => 'admin.categorie.index'
        ]);
        /*CategorieController  Edit*/
        Route::any('categorie/edit/{id}', [
            'uses' => "CategorieController@addEdit",
            'as'   => 'admin.categorie.edit'
        ]);       
        /*CategorieController create */
        Route::any('categorie/create', [
            'uses' => "CategorieController@addEdit",
            'as'   => 'admin.categorie.create'
        ]);   
        Route::any('categorie/anyData', [
            'uses' => "CategorieController@anyData",
            'as'   => 'admin.categorie.create'
        ]);   
        Route::get('categorie/delete/{id}', ['uses' => "CategorieController@delete"]);

        // user 
            /*UserController*/
            Route::get('/user', [
                'uses' => "UserController@index",
                'as'   => 'admin.user.index'
            ]);
            /*UserController  Edit*/
            Route::any('user/edit/{id}', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.edit'
            ]);       
            /*UserController create */
            Route::any('user/create', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.create'
            ]);   
            Route::any('user/anyData', [
                'uses' => "UserController@anyData",
                'as'   => 'admin.user.create'
            ]);   
        // end user
        Route::get('user/delete/{id}', ['uses' => "UserController@delete"]);
    });

});

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
