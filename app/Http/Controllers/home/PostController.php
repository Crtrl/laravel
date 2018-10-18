<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Sys;
use App\Model\Admin\Front_users;
use App\Model\Admin\Cate;
use App\Model\Admin\Post;
use App\Model\Admin\ront_users;

class PostController extends Controller
{
    //帖子主页
    public function post(Request $request)
    {
    	$zx = Sys::get();

    		
    	$rs = Front_users::get();

    	$cate = Cate::where('id','1')->get()[0];

    	$title = $request->input('title');

    	$list =Post::where('cid','4')->where('title','like','%'.$title.'%')->get();

    	
            

    	

    

    	
 	
    	/*$aa =  date('Y-m-d h:i:s', time()); 
    	dd($aa);*/
    
    	return view('home/post/post',['title'=>$title,'request'=>$request,'zx'=>$zx,'rs'=>$rs,'cate'=>$cate,'list'=>$list]);

    }

	 //接收帖子
 	public function add(Request $request)
 	{
 		$sj =  $request->all();

                              $qp = $sj['content'];

                              $sj['content'] = trim($qp,'</p>');

                             


                        $sj['cid'] = '4';

 		$sj['ptime'] =   time(); 
	
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
