<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SysController extends Controller
{
    public function web(Request $request)
    {
            $rs = DB::table('sys')->get();


    	return view('/admin/sys/web',['rs'=>$rs]);
    }

           public function update(Request $request)
        {


                $res = $request->except('_token','_method','slogo');

            if($request->hasFile('slogo')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('slogo')->getClientOriginalExtension(); 

            //移动
            $request->file('slogo')->move('uploads',$name.'.'.$suffix);

            $res['slogo'] = '/uploads/'.$name.'.'.$suffix;

              }

          



                        try{
           
            $rs = DB::table('sys')->update($res);


            if($rs){

                return redirect('/admin/sys/web');
            }
        }catch(\Exception $e){

            return back();

        }





        }
    public function aud()
    {
            $skeywords= DB::table('sys')->pluck('skeywords')[0];
           

    	return view('/admin/sys/aud',['skeywords'=>$skeywords]);
    }



    public function upshen()
    {

    }
    public function jinIP()
    {
    	return view('/admin/sys/jinIP');
    }

}
