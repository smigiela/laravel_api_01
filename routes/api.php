<?php

use Illuminate\Http\Request;

Route::post('authenticate', 'ApiAuthController@login');

Route::group([
    'middleware' => 'jwt.auth'
    ], function () {
        Route::post('logout', 'ApiAuthController@logout');
        Route::post('refresh', 'ApiAuthController@refresh');
        Route::post('me', 'ApiAuthController@me');
        Route::resource('/admin/categories', 'Admin\CategoryController');
        Route::resource('/admin/tags', 'Admin\TagController');
    });
Route::resource('/admin/posts', 'Admin\PostsController');


Route::post('/register', [
    'uses' => 'ApiAuthController@register'
]);


