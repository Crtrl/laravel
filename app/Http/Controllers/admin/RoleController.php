<?php

namespace App\Http\Controllers\admin;

use App\Model\Admin\Role;
use App\Model\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Role::get();
        $per = Permission::get();
        return view('admin.role.index',['rs'=>$rs,'per'=>$per]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $per = Permission::get();
        return view('admin.role.create',['per'=>$per]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->except('_token');
        if($request->has('auth')){
            $rs['permission'] = implode(',', $rs['auth']);
            unset($rs['auth']);
        } else {
             $rs['permission'] = '';
        }
        
        // dd($rs);
        
        try{
         Role::create($rs)->permission()->attach($request->input('auth'));  
        }catch(\Exception $e){
            return back()->with(['error'=>'创建角色失败']);
        }
        return redirect('admin/role')->with(['success'=>'创建角色成功']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $per = Permission::get();
        $role->permission = explode(',', $role->permission);
        // dd($rs);
        return view('admin.role.edit',['per'=>$per,'role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $rs = $request->except('_token','_method');
        
        if(!$request->input('permission')){
            $rs['permission'] = '';
        }
        $rs['permission'] = implode(',', $rs['permission']);
        // dd($rs);
        try{
            $role->update($rs);
            $role->permission()->sync($request->input('permission'));
        }catch(\Exception $e){
            return back()->with(['error'=>'修改失败']);
        }
        return redirect('/admin/role')->with(['error'=>'修改成功']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        // dd($role);
        if($role->id==1){
            return back()->with(['error'=>'超级管理员无法删除']);
        }
        try{
            $role->permission()->detach();
            $role->destroy($role->id);
        }catch(\Exception $e){
            return back()->with(['error'=>'删除失败']);
        }
        return redirect('/admin/role')->with(['success'=>'删除成功']);
    }
}
