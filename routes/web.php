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


// Route::get('/admin','admin\IndexController@Index');
Route::get('/admin/login','admin\LoginController@login');
Route::resource('admin/user','admin\UserController');



//后台公共模板
Route::get('/common',function(){
	return view('common/admin');
});

//广告管理路由
Route::resource('admin/ad','admin\AdController');
//分类管理路由
Route::resource('admin/category','admin\CategoryController');




//前台登录
Route::any('home/login','home\LoginController@login');
Route::any('home/dologin','home\LoginController@dologin');





