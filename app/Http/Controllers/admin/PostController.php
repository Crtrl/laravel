<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Cate;
use App\Model\Admin\Front_users;
class PostController extends Controller
{
	public function index(Request $request)
	{
		$front_users = Front_users::get();
		
		  $name = $request->input('name');


		$cate = Cate::where('name','like','%'.$name.'%')->orderby('id','desc')->get();
		$ct = [];
		foreach($cate as $k=>$v){
			$ct[] = $v['id'];
		}
		// dd($ct);
		$post = Post::whereIn('cid',$ct)->get();
		return view('admin/post/index',['post'=>$post,'cate'=>$cate,'front_users'=>$front_users,'request'=>$request]);
	}


	public function destroy(Request $request,$id)
	{


	         $del = Post::where('id',$id)->delete();
	   
	         return redirect('/admin/post/index'); 
 		
	}



   
}
