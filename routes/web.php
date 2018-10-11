<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/index','admin\IndexController@Index');
//公共页面
Route::get('/admin/common','admin\IndexController@common');

Route::get('/admin/login','admin\LoginController@login');


Route::resource('admin/user','admin\UserController');


//前台友情链接
Route::get('home/friends','home\FriendsController@friends');
Route::get('home/face','home\FriendsController@face');
Route::get('home/pwd','home\FriendsController@pwd');





//后台友情链接管理
Route::resource('admin/friends','admin\FriendsController');

//前台修改个人信息
Route::get('/home/user/profile','home\UserController@profile');
Route::post('/home/user/update','home\UserController@update');
Route::post('/home/user/face','home\UserController@face');
Route::get('/home/user/pwd','home\UserController@pwd');

//个人用户
route::any('/home/user/xinxi','home\UserController@xinxi');


//后台系统设置
Route::get('/admin/sys/web','admin\SysController@web');
Route::get('/admin/sys/aud','admin\SysController@aud');
Route::get('/admin/sys/jinIP','admin\SysController@jinIP');