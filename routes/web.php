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
Route::get('home/common',function(){
	return view('/common/home');
});


//后台公共页面
Route::get('/admin/common','admin\IndexController@common');

//前台公共页面
Route::get('/common/home','home\IndexController@cmn');

//前台登录
Route::any('/home/login','home\LoginController@login');
Route::any('/home/dologin','home\LoginController@dologin');


//前台路由组
Route::group([],function()
{
	//前台友情链接
	Route::get('/home/friends','home\FriendsController@friends');
	Route::get('/home/face','home\FriendsController@face');
	Route::get('/home/pwd','home\FriendsController@pwd');



	//系统维护
	Route::get('admin/mai','admin\IndexController@mai');

	//前台选项卡
	Route::get('/home/index','home\IndexController@index');
	Route::get('/home/user/update','home\IndexController@update');
	Route::get('/common/home','home\IndexController@profile');
	Route::post('/home/user/face','home\IndexController@face');
	Route::get('/home/user/pwd','home\IndexController@pwd');


	//前台修改个人信息
	Route::get('/home/user/profile','home\UserController@profile');



});


//后台登陆
Route::get('/admin/login','admin\LoginController@login');

//后台路由组
Route::group([],function ()
{
	//后台首页
	Route::get('/admin/index','admin\IndexController@Index');

	//后台系统设置
	Route::get('/admin/sys/web','admin\SysController@web');
	Route::get('/admin/sys/aud','admin\SysController@aud');
	Route::get('/admin/sys/jinIP','admin\SysController@jinIP');
	Route::post('/admin/sys/update','admin\SysController@update');
	//广告管理路由
	Route::resource('admin/ad','admin\AdController');
	//分类管理路由
	Route::resource('admin/category','admin\CategoryController');
	//后台友情链接管理
	Route::resource('admin/friends','admin\FriendsController');
	//轮播图
	Route::resource('/admin/slideshows','admin\SlideShowsController');

	//后台用户管理
	Route::resource('admin/user','admin\UserController');

});
