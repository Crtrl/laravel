<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Hash;

// use Illuminate\Support\Facades\Hash;

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
    	// dd($res);//拿到输入的信息 "fname" => "123""password" => "123"
    	//判断用户名
            //从数据库查询出数据
    	$data = DB::table('front_users')->where('fname',$res['fname'])->first();
    		// dd($data);
         
        // dd( $decrypted);       
    		if(!$data){

    		return back()->with('error','用户名或者密码错误');
    	}
    	//判断密码
    	// dd(Hash::check('123', $data->pwd));
    	// if(!Hash::check($res['password'], $data->pwd)){

    	// 	return back()->with('error','用户名或者密码错误');

    	// }
         $decrypted = decrypt($data->pwd); 
        if ( $decrypted !== $res['password']) {
                return back()->with('error','用户名或者密码错误');
        }

    	  session(['fid'=>$data->fid]);
        // if (!$request->session()->exists('fid')) {
        //      echo 1234567;
        //  } else{echo 9999999999;}

    	return redirect('/home/index');
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
    public function save(Request $request){
       $res = $request->except('_token','repwd');
       // dd($res);
       $datas = DB::table('front_users')->where('fname',$res['fname'])->first();
       // dd($datas);
       if ($datas) {
           return back()->with('error','用户名已存在');
       }
       $res['pwd'] = encrypt($request->input('pwd'));
       $res['regtime'] = time();
       $rand = rand(1,20);
       $res['face'] = "/images/background/$rand.jpg";
       // dd($res);
        try{
           $rs = DB::table('front_users')->insert($res);
            if($rs){
                return redirect('/home/login')->with('success','添加成功');
            }
        }catch(\Exception $e){
            return back()->with('error','添加失败');
        } 
    }

    /**
         *  退出登录处理
         *
         *  @return 页面
         */
    public function loginout(){
        //清空session
        session(['fid'=>'']);
        return redirect('/home/index');
    }
}
