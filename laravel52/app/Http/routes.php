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

Route::get('/', function () {
    return view('index/index');
});

Route::group(['middleware'=>['web']],function(){

	//后台登录
    Route::get('admin/', 'Admin\LoginController@index');
    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
    Route::any('admin/crypt', 'Admin\LoginController@crypt');
    Route::any('admin/test', 'Admin\LoginController@test');
    // 用户注册
    Route::any('user/register', 'User\UserController@register');
    Route::any('user/index', 'User\UserController@index');

});

Route::group(['middleware'=>['web','admin.login']],function(){


});



