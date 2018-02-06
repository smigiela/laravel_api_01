<?php

use Illuminate\Http\Request;

Route::post('authenticate', 'ApiAuthController@login');

Route::group([
    'middleware' => 'jwt.auth'
    ], function () {
        Route::post('logout', 'ApiAuthController@logout');
        Route::post('refresh', 'ApiAuthController@refresh');
        Route::post('me', 'ApiAuthController@me');
    });
Route::resource('/admin/posts', 'PostsController');
Route::resource('/admin/categories', 'CategoriesController');
Route::resource('/admin/tags', 'TagsController');
Route::resource('/admin/users', 'UsersController');


//Route::post('/register', [
//    'uses' => 'ApiAuthController@register'
//]);


