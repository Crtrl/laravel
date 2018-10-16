<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;

class LoginController extends Controller
{   
    /**
         *  前台登录的页面
         *
         *  @return 页面
         */
     public function login()
    {
    	return view('home.login.login');
    }

    /**
         *  前台登录信息的处理
         *
         *  @return 页面
         */
    public function dologin(Request $request){
    	//获取信息
    	$res = $request->except('_token');
    	// dd($res);//拿到输入的信息
    	//判断用户名
    	$data = DB::table('front_users')->where('fname',$res['username'])->first();
    		// dd($data);
    		if(!$data){

    		return back()->with('error','用户名或者密码错误');
    	}
    	//判断密码
    	// dd(Hash::check($res['password'], $data->pwd));
    	if(!Hash::check($res['password'], $data->pwd)){

    		return back()->with('error','用户名或者密码错误');

    	}

    	session(['fid'=>$data->id]);

    	return redirect('/admin/index');
    	//提示信息
    	// echo 123456789;
    }


    /**
         *  前台注册页面
         *
         *  @return 页面
         */
    public function register(){
        return view('home.login.register');
    }
    /**
         *  前台注册的处理
         *
         *  @return 页面
         */
    public function save(){
       
    }
}
