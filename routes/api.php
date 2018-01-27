<?php

use Illuminate\Http\Request;

Route::group([
    'middleware' => 'jwt.auth'
    ], function () {
        Route::resource('/admin/categories', 'Admin\CategoryController');
        Route::resource('/admin/posts', 'Admin\PostsController');
        Route::resource('/admin/tags', 'Admin\TagController');
    });

Route::post('/authenticate', [
    'uses' => 'ApiAuthController@authenticate'
]);
Route::get('/logout', [
    'uses' => 'ApiAuthController@logout'
]);
Route::post('/register', [
    'uses' => 'ApiAuthController@register'
]);