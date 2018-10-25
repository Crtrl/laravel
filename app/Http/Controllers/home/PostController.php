<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Sys;
use App\Model\Admin\Front_users;
use App\Model\Admin\Cate;
use App\Model\Admin\Post;


class PostController extends Controller
{
    //帖子主页
    public function post(Request $request)
    {
    	$zx = Sys::get();

    		
    	$rs = Front_users::where('fid',session('fid'))->get();

 

    	$cate = Cate::where('id','1')->get()[0];

    	$title = $request->input('title');

    	$list =Post::where('cid','4')->orderby('top','asc')->where('title','like','%'.$title.'%')->paginate(8);

    	//获取最近24小时发的帖子
    	$time = time() - 3600*24;
    	//获取最近24小时发帖数量
    	$sum = Post::where('ptime','>',$time)->get();
    	 $today = count($sum);

    	
    	 //计算帖子总数
    	 $zq = Post::get();

    	 $zong = count($zq);

    	


    	
    
    	return view('home/post/post',['today'=>$today,'zong'=>$zong,'title'=>$title,'request'=>$request,'zx'=>$zx,'rs'=>$rs,'cate'=>$cate,'list'=>$list]);

    }

	 //发送帖子
 	public function add(Request $request)
 	{
          try{
                 	    $sj = $request ->except('_token');
                	//去除<p>标签
                $qp = $sj['content'];

                $sj['content'] = trim($qp, '</p>');

                $sj['cid'] = '4';

                $sj['ptime'] = time();

                $rz = Front_users::where('fid', session('fid'))->get()[0]['fname'];

                $sj['zname'] = $rz;

                $zz = Front_users::where('fid',session('fid'))->pluck('status')[0];
             
                if ($zz == '1') {
                       $rs = Post::insert($sj);



                    return redirect('/home/post');
                  }
                }catch(\Exception $e){
                    return redirect('/home/index');
                }

                }




 
}
