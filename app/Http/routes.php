<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('blog', 'BlogController@postagens');

//Route::get('blog', 'PostsController@index');


//Login
Route::get('/auth', function()
    {

        if(Auth::attempt(['email'=>'bezz.sergio@gmail.com', 'password'=>1234]))
        {
            return "OK";
        }

        return "Falhou";
    });

Route::get('/auth/logout', function(){

    Auth::logout();
});


//Home
Route::get('/', 'PostsController@index');


//Admin
Route::get('admin/posts',              ['as' => 'admin.posts.index'  , 'uses' => 'PostsAdminController@index']);
Route::get('admin/posts/create',       ['as' => 'admin.posts.create' , 'uses' => 'PostsAdminController@create']);
Route::post('admin/posts/store',       ['as' => 'admin.posts.store'  , 'uses' => 'PostsAdminController@store']);
Route::get('admin/posts/edit/{id}',    ['as' => 'admin.posts.edit'   , 'uses' => 'PostsAdminController@edit']);
Route::put('admin/posts/update/{id}',  ['as' => 'admin.posts.update' , 'uses' => 'PostsAdminController@update']);
Route::get('admin/posts/destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);



