<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\SlideShows;

use App\Model\Admin\Cate;


use DB;

class IndexController extends Controller
{
	public function index()
	{

        $st = DB::table('sys')->pluck('sstatus');

        if($st[0] == '0'){
            return redirect('admin/mai');
        }

		$slideShows = SlideShows::Orderby('id','ASC')->get();
		// var_dump($slideShows);die;
	

		$rs = DB::table('front_users')->get();

                    $res = DB::table('friends')->get();

                    
                        $zx = DB::table('sys')->get();
                        //遍历前台页面
                        $cate = Cate::where('id', '1')->first();
                        


                      
		return view('home.index',['rs'=>$rs,
                                                            'res'=>$res,
                                                            'zx'=>$zx,
                                                            'slideShows'=>$slideShows,
                                                            'cate'=>$cate]);
	}


	public function update(Request $request)
    {
        $res = $request ->except('_token');

        try {
            $rs = DB::table('front_users') ->update($res);

            if ($rs) {

                return redirect('/home/index');
            }
        } catch(\Exception $e) {

            return back();

        }
    }


    public function face(Request $request) 
    {
            $res = $request ->only('face');

            if ($request ->hasFile('face')) {

                //自定义名字
                $name = time().rand(1111, 9999);

                //获取后缀
                $suffix = $request ->file('face') ->getClientOriginalExtension();

                //移动
                $request ->file('face') ->move('uploads', $name.'.'.$suffix);

                $res['face'] = '/uploads/'.$name.'.'.$suffix;

            }

            try {

                $rs = DB::table('front_users') ->update($res);

                if ($rs) {

                    return redirect('/home/index');
                }
            } catch(\Exception $e) {

                return back();

            }

        }


        public function pwd(Request $request)
        {

            //表单验证
            //获取数据库密码
            $pass = DB::table('front_users')->first();

              
            
            //获取旧密码
            $oldpass = $request->oldpass;

            if($pass->pwd != $oldpass){
                return back()->with('error','原密码错误');
            }

            $rs['pwd'] = $request->password;
           
            $re['pwd'] = $request->repass;
           
            $data  = DB::table('front_users')->update($rs);


            if($data && $rs['pwd'] == $re['pwd']){
                return redirect('/home/index');
            }else{
                return back();
            }
        }

        public function cmn()
        {
            $rs = DB::table('front_users')->get();

            $zx = DB::table('sys')->get();

            return view('common/home',['rs'=>$rs,'zx'=>$zx]);
        }

}
