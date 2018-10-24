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

	//前台选项卡
	Route::get('/home/user/update','home\IndexController@update');
	Route::get('/common/home','home\IndexController@profile');
	Route::post('/home/user/face','home\IndexController@face');
	Route::get('/home/user/pwd','home\IndexController@pwd');


	//帖子列表页
	Route::get('home/post/{id}','home\PostController@post');
	//获取帖子信息
	Route::get('home/post/add','home\PostController@add');
	//帖子详情页
	Route::resource('/home/details','home\DetailsController');
	//前台修改个人信息
	Route::get('/home/user/profile','home\UserController@profile');
	//前台退出
	Route::any('/home/loginout','home\LoginController@loginout');
	//前台评论
	Route::any('/home/comments','home\CommentsController@comments');

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
	Route::get('/admin/sys/jinIP','admin\SysController@jinIP');
	Route::post('/admin/sys/update','admin\SysController@update');
	Route::post('/admin/sys/upshen','admin\SysController@upshen');
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
	Route::post('admin/post/{id}','admin\PostController@destroy');


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
