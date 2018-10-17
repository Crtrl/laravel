<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Users;
use App\Http\Requests\admin\LoginRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }

    public function dologin(LoginRequest $request)
    {
    	$rs = $request->except('_token');
    	$user = Users::where('username',$rs['username'])->first();
    	if (decrypt($user->password) == $rs['password'] && $user) {
    		session(['user'=>$user]);
            // dd(session('user'));
    		return redirect('admin/index');
    	}
    	return back()->withErrors(['error'=>'用户名或密码错误']);
    }
	
}
