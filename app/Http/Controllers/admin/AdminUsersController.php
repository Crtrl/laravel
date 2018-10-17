<?php

namespace App\Http\Controllers\admin;

use App\Model\Admin\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminUsers;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rs = Users::orderBy('id','ASC')->where('username','like','%'.$request->input('username').'%')->paginate($request->input('num',10));
        // dd($rs);
        return view('admin.users.index',[
            'rs'=>$rs,
            'request'=>$request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUsers $request)
    {
        $rs = $request->except('_token','password_confirmation');

        //权限拼接成为字符串
        $num = count($request->input('auth'));
        $str = '';
        for($i = 0;$i < $num;$i++){
            $str .= $request->input('auth')[$i].',';
        }
        $rs['auth'] = rtrim($str,',');
        
        $rs['password'] = encrypt($rs['password']);
        $rs['addtime'] = date('Y-m-d-H:i:s',time());
        // var_dump($rs['addtime']);die;
        
        try{
            Users::create($rs);
        }catch(\Exception $e){
            return back()->withErrors(['error'=>'创建失败']);
        }
        return redirect('/admin/users')->with(['success'=>'创建成功']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users, $id)
    {
        $rs = Users::find($id);
        // dd($id);
        $rs['auth'] = explode(',',$rs['auth']);
        // dd($rs['auth']);
        return view('admin.users.edit',['rs'=>$rs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users, $id)
    {
        $rs = $request->except('_token','_method');
        try{
            Users::where('id',$id)->update($rs);
        }catch(\Exception $e){
            return back()->with(['error'=>'修改失败']);
        }
        return redirect('/admin/users')->with(['success'=>'修改成功']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users, $id)
    {
        
        try{
            Users::destroy('id',$id);
        }catch(\Exception $e){
            return back()->with(['error'=>'删除失败']);
        }
        return back()->with(['success'=>'删除成功']);
    }
}
