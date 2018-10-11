<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //$rs = DB::table('friends')->get();
        $fname = $request->input('fname');

        $rs = DB::table('friends')->where('fname','like','%'.$fname.'%')->get();

         $friends = DB::table('friends')->paginate(5);

    
 

       
        return view('admin/friends/index',[
            
            'rs'=>$rs,
               'friends'=>$friends,
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
            $rs = DB::table('friends')->insert($res);

          if($rs){
            return redirect('/admin/friends');
          }else{
            return redirect('/admin/friends/create');
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
        $res = DB::table('friends')->where('fid',$id)->first();

   
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
           
            $rs = DB::table('friends')->where('fid',$id)->update($res);


            if($rs){

                return redirect('/admin/friends');
            }
        }catch(\Exception $e){

            return back();

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
         
           
            $res = DB::table('friends')->where('fid',$id)->delete();

            return redirect('/admin/friends');
    }
}
