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



// Route::get('/admin','admin\IndexController@Index');
Route::get('/admin/login','admin\LoginController@login');
Route::resource('admin/user','admin\UserController');





//广告管理路由
Route::resource('admin/ad','admin\AdController');
//分类管理路由
Route::resource('admin/category','admin\CategoryController');




//前台登录
Route::any('/home/login','home\LoginController@login');
Route::any('/home/dologin','home\LoginController@dologin');



//后台主页面
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

//后台系统管理





//前台修改个人信息
Route::get('/home/user/profile','home\UserController@profile');



//个人用户
route::any('/home/user/xinxi','home\UserController@xinxi');


//后台系统设置
Route::get('/admin/sys/web','admin\SysController@web');
Route::get('/admin/sys/aud','admin\SysController@aud');
Route::get('/admin/sys/jinIP','admin\SysController@jinIP');









//前台页面
Route::get('/home/index','home\IndexController@index');
Route::get('/home/user/update','home\IndexController@update');
Route::get('/common/home','home\IndexController@profile');
Route::post('/home/user/face','home\IndexController@face');
Route::get('/home/user/pwd','home\IndexController@pwd');

//后台页面
Route::get('/admin/index','admin\IndexController@Index');


Route::get('/admin/login','admin\LoginController@login');


Route::resource('/admin/user','admin\UserController');

//轮播图
Route::resource('/admin/slideshows','admin\SlideShowsController');
//轮播图预览
Route::any('/admin/upload','admin\AjaxController@upload');

