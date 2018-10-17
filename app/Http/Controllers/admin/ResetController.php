<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Users;

class ResetController extends Controller
{
    /**
     * 进入用户修改密码页面
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        $id = session()->get('user')['id'];
        // dd($id);
        return view('admin.users.reset',['id'=>$id]);
    }

    /**
     * 修改制定用户密码
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function doreset(Request $request, $id)
    {
        $rs['password'] = encrypt($request->input('pwd'));
        // dd($rs);
       	try{
       		Users::where('id',$id)->update($rs);
       	}catch(\Exception $e){
       		return back()->with(['error'=>'修改失败']);
       	}
       	return redirect('/admin/index')->with(['success'=>'修改密码成功']);
    }

     /**
     * 用户登出
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
       session(['user'=>null]);
       return redirect('/admin/login');
    }
}	
