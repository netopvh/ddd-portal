<?php

// Authentication Routes...
Route::get('login', 'LoginController@showLoginForm')->middleware('web')->name('login');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'ResetPasswordController@reset');

Route::group(['prefix' => 'dashboard'],function (){
    Route::group(['prefix' => 'users'], function (){
        Route::get('/','UserController@index')->name('admin.users');
    });

    Route::group(['prefix' => 'roles'], function (){
        Route::get('/','RoleController@index')->name('admin.roles');
    });

    Route::group(['prefix' => 'permissions'], function (){
        Route::get('/','PermissionController@index')->name('admin.permissions');
    });
});