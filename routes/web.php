<?php

use \Illuminate\Support\Facades\Route;


//home
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index');
    //文章详情页
    Route::get('/article/{id}', 'IndexController@show');
    //关于我
    Route::get('about', 'AboutController@index');
});


//admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index');
    //创建
    Route::get('/create', 'IndexController@create');
});

//login
Route::get('admin/login', 'Admin\LoginController@login');
//logout
Route::get('admin/logout', 'Admin\LoginController@logout');
//速查表
//    Route::get('/sheet', 'IndexController@index');


