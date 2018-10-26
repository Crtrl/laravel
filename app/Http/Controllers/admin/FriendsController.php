<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
use App\Model\Admin\Friends;
class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         //后台友情链接模糊查询
        $fname = $request->input('fname');

        $rs = Friends::where('fname','like','%'.$fname.'%')->paginate(5);
       
        return view('admin/friends/index',[
            
            'rs'=>$rs,
              
            'fname'=>$fname,
            'request'=>$request
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('admin/friends/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $res =  $request->except('_token','img');

     


          //文件上传
        if($request->hasFile('fpic')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('fpic')->getClientOriginalExtension(); 

            //移动
            $request->file('fpic')->move('uploads',$name.'.'.$suffix);
       
            $res['fpic'] = '/uploads/'.$name.'.'.$suffix;
        }

        
            //dd($res);
            $rs = Friends::insert($res);

          if($rs){
            return redirect('/admin/friends')->with('success','添加成功');
          }else{
            return redirect('/admin/friends/create')->with('error','添加失败');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Friends::where('fid',$id)->first();

   
        return view('/admin/friends/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = $request->except('_token','_method','fpic');

        if($request->hasFile('fpic')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('fpic')->getClientOriginalExtension(); 

            //移动
            $request->file('fpic')->move('uploads',$name.'.'.$suffix);

            $res['fpic'] = '/uploads/'.$name.'.'.$suffix;

        }

                try{
           
            $rs =Friends::where('fid',$id)->update($res);


            if($rs){

                return redirect('/admin/friends')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
           
            $res = Friends::where('fid',$id)->delete();

            return redirect('/admin/friends')->with('success','删除成功');
    }
}
