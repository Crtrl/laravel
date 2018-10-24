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

    		
    	$rs = Front_users::where('fid','1')->get();

 

    	$cate = Cate::where('id','1')->get()[0];

    	$title = $request->input('title');

    	$list =Post::where('cid','4')->orderby('top','asc')->where('title','like','%'.$title.'%')->get();

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

	 //接收帖子
 	public function add(Request $request)
 	{

 		$sj =  $request->all();



                              $qp = $sj['content'];

                              $sj['content'] = trim($qp,'</p>');

                             


                        $sj['cid'] = '4';

 		$sj['ptime'] =   time(); 

      $rz = Front_users::where('fid','1')->get()[0]['fname'];

      $sj['zname'] = $rz;
	
 		/*$ft = front_users::pluck('fname');
 		dd($ft);*/
 	
 		   $rs = Post::insert($sj);
 		  

      
          if($rs){
            return redirect('/home/post');
          }else{
            return redirect('/home/post');
          }

 		
 	}






 
}
