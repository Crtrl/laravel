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
Route::get('/home/common',function(){
	return view('/common/home');
});











//前台登录
	Route::any('/home/login','home\LoginController@login');
	Route::any('/home/dologin','home\LoginController@dologin');
//前台注册
	Route::any('/home/register','home\LoginController@register');
	Route::any('/home/save','home\LoginController@save');
//前台首页
	Route::get('/home/index','home\IndexController@index');
//前台路由组
Route::group(['middleware'=>'homelogin'],function()
{
	//前台友情链接
	Route::get('/home/friends','home\FriendsController@friends');
	Route::get('/home/face','home\FriendsController@face');
	Route::get('/home/pwd','home\FriendsController@pwd');

	//前台修改个人信息
	Route::get('/home/user/profile','home\UserController@profile');

	//前台选项卡
	Route::get('/home/user/update','home\IndexController@update');
	Route::get('/common/home','home\IndexController@profile');
	Route::post('/home/user/face','home\IndexController@face');
	Route::get('/home/user/pwd','home\IndexController@pwd');
	//我的帖子
	Route::get('home/user/my','home\IndexController@my');
	Route::get('home/user/sc','home\IndexController@sc');
	//删除我的帖子
	Route::get('home/user/{id}','home\IndexController@del');


	//帖子主页
	Route::get('home/post','home\PostController@post');

	//帖子禁用
	Route::get('/admin/post/jin/{id}','admin\PostController@jin');
	//IP禁用
	Route::get('/admin/post/ip/{id}','admin\PostController@ip');
	//IP解禁
	Route::get('/admin/post/jieip/{id}','admin\PostController@jieip');
	
	
	


	//获取帖子信息
	Route::post('home/post/add','home\PostController@add');

	
	
	//前台退出
	Route::any('/home/loginout','home\LoginController@loginout');	
});




//后台公共页面
Route::get('/admin/common','admin\IndexController@common');

//后台登陆
Route::get('/admin/login','admin\LoginController@login');
Route::post('/admin/dologin','admin\LoginController@dologin');

//后台路由组
Route::group([],function ()
{
	//后台首页
	Route::get('/admin/index','admin\IndexController@Index');


	//后台系统设置
	Route::get('/admin/sys/web','admin\SysController@web');
	Route::get('/admin/sys/aud','admin\SysController@aud');
	Route::post('/admin/sys/update','admin\SysController@update');
	Route::post('/admin/sys/upshen','admin\SysController@upshen');
	Route::post('/admin/sys/upjin','admin\SysController@upjin');
	//广告管理路由
	Route::resource('admin/ad','admin\AdController');
	//后台类别管理路由
	Route::resource('admin/category','admin\CategoryController');
	//后台友情链接管理
	Route::resource('admin/friends','admin\FriendsController');
	//轮播图
	Route::resource('/admin/slideshows','admin\SlideShowsController');


	//帖子列表
	Route::get('admin/post/index','admin\PostController@index');
	//帖子删除
	Route::post('admin/post/{id}','admin\PostController@destroy');
	//帖子加亮
	Route::get('admin/post/lit/{id}','admin\PostController@light');
	//帖子置顶
	Route::get('admin/post/top/{id}','admin\PostController@top');
	


	//后台用户管理

	//用户修改密码
	Route::get('/admin/reset','admin\ResetController@reset');
	Route::post('/admin/doreset/{id}','admin\ResetController@doreset');
	//用户退出
	Route::any('/admin/logout','admin\ResetController@logout');
	//用户管理资源路由
	Route::resource('/admin/users','admin\AdminUsersController');

	//系统维护
	Route::get('admin/mai','admin\IndexController@mai');

});
