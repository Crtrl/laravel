<?php

namespace App\Http\Controllers\admin;

use App\Model\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Permission::paginate(10);
        // dd($rs);
        return view('/admin.permission.index',['rs'=>$rs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->except('_token'));
        $rs = $request->except('_token');
        try{
            Permission::create($rs);
        }catch(\Exception $e){
            return back()->with(['error'=>'创建失败']);
        }
        return redirect('/admin/permission')->with(['success'=>'创建成功']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        // dd($permission);
        return view('/admin.permission.edit',['rs'=>$permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $rs = $request->except('_token','_method');
        // dd($request);
        try{
            $permission->where('id',$permission->id)->update($rs);
        }catch(\Exception $e){
            return back()->with(['error'=>'修改失败']);
        }       
        return redirect('/admin/permission')->with(['success'=>'修改成功']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        try{
            $permission->destroy($permission->id);
        }catch(\Exception $e){
            return back()->with(['error'=>'删除失败']);
        }
        return redirect('/admin/permission')->with(['error'=>'删除成功']);
    }
}
