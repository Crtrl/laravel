<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Sys;
use App\Model\Admin\Front_users;

class SysController extends Controller
{
    public function web(Request $request)
    {
            $rs = Sys::get();


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
           
            $rs =Sys::where('sid',1)->update($res);



            if($rs){

                return redirect('/home/index');
            }
        }catch(\Exception $e){

            return back();

        }

  }
    public function aud()
    {
            $skeywords= Sys::pluck('skeywords')[0];
           

    	return view('/admin/sys/aud',['skeywords'=>$skeywords]);
    }



    public function upshen()
    {

    }



    public function jinIP()
    {

    	$Front_users = Front_users::get();

    	//dd($Front_users);

    	return view('/admin/sys/jinIP',['Front_users'=>$Front_users]);
    }

    public function upjin(Request $request)
    {
        $rs = $request->input('status');
    


 

      


       $Front_users = Front_users::where('fid',$rs)->update(['status'=>0]);

}
   


}
