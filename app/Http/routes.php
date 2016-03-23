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
        Route::get('categorie/delete/{id}', ['uses' => "CategorieController@delete"]);
    });
    
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
