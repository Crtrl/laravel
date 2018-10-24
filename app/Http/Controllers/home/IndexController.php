<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\SlideShows;
use App\Model\Admin\Front_users;
use App\Model\Admin\Post;
use App\Model\Home\Sys;
use App\Model\Admin\Cate;
use App\Model\Admin\Friends;
use DB;

class IndexController extends Controller
{

    //公共页面
	public function index()
	{

        $st = Sys::pluck('sstatus');

        if($st[0] == '0'){
            return redirect('admin/mai');
        }

		$slideShows = SlideShows::Orderby('id','ASC')->get();
		// var_dump($slideShows);die;
	

		$rs = Front_users::where('fid',session('fid'))->get();

            $res = Friends::get();
            $zx = Sys::get();
            //遍历前台页面
            $cate = Cate::where('id', '1')->first();
               
		return view('home.index',['rs'=>$rs,
                                'res'=>$res,
                                'zx'=>$zx,
                                'slideShows'=>$slideShows,
                                'cate'=>$cate]);

	}

    //修改个人信息
	public function update(Request $request)
    {
        $res = $request ->except('_token');

        try {
            $rs = Front_users::update($res);

            if ($rs) {

                return redirect('/home/index');
            }
        } catch(\Exception $e) {

            return back();

        }
    }

    //修改头像
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

                $rs = Front_users::update($res);

                if ($rs) {

                    return redirect('/home/index');
                }
            } catch(\Exception $e) {

                return back();

            }

        }

        //  修改密码
        public function pwd(Request $request)
        {

            //表单验证
            //获取数据库密码
            $pass = Front_users::first();

                     
            //获取旧密码
            $oldpass = $request->oldpass;

            if($pass->pwd != $oldpass){
                return back()->with('error','原密码错误');
            }

            $rs['pwd'] = $request->password;
           
            $re['pwd'] = $request->repass;
           
            $data  = Front_users::update($rs);


            if($data && $rs['pwd'] == $re['pwd']){
                return redirect('/home/index');
            }else{
                return back();
            }
        }


        public function my()
        {

            $slideShows = SlideShows::Orderby('id','ASC')->get();
		    // var_dump($slideShows);die;
	

		    $rs = Front_users::where('fid',session('fid'))->get();
		
            $res = DB::table('friends')->get();
            $zx = Sys::get();
            //遍历前台页面
            $cate = Cate::where('id', '1')->first();

           
            $zname = $rs[0]['fname'];
            $post =Post::where('zname',$zname)->paginate(10);

                      
		    return view('home/user/my',['rs'=>$rs,
                                        'res'=>$res,
                                        'zx'=>$zx,
                                        'slideShows'=>$slideShows,
                                        'cate'=>$cate,
                                        'post'=>$post
                                     ]);

        }

        public function del(Request $request,$id)
        {
               
            $res = Post::where('id',$id)->delete();

            return redirect('/home/user/my');
        }

        public function sc()
        {

     
        }


}
