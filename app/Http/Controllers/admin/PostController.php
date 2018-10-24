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
		$post = Post::whereIn('cid',$ct)->paginate(10);


		return view('admin/post/index',['post'=>$post,'cate'=>$cate,'front_users'=>$front_users,'request'=>$request]);
	}


	public function destroy(Request $request,$id)
	{


	         $del = Post::where('id',$id)->delete();
	   
	         return redirect('/admin/post/index'); 
 		
	}

	public function light($id)
	{

		Post::where('id',$id)->update(['liang'=>'1']);	

		return redirect('/admin/post/index'); 

	}
	public function top($id)
	{


		Post::where('id',$id)->update(['top'=>'1']);	

		return redirect('/admin/post/index'); 
	}


	public function jin($id)
	{
		try{
		           
		          $rs = Post::where('id',$id)->delete();


		 if($rs){

		           return redirect('/admin/index')->with('success','禁用成功');
		           }
		        }catch(\Exception $e){

		            return back()->with('error','禁用失败');

		        }
	}


	public function ip($id)
	{

			



			try{
		           
		         $zname = Post::where('id',$id)->get()[0]['zname'];
			$front_users = Front_users::where('fname',$zname)->update(['status'=>0]);


		 if($front_users){

		           return redirect('/admin/post/index')->with('success','禁用IP成功');
		           }
		        }catch(\Exception $e){

		            return back()->with('error','禁用IP失败');

		        }




	
	}


	public function jieip($id)
	{



			try{
		           
		         $zname = Post::where('id',$id)->get()[0]['zname'];
			$front_users = Front_users::where('fname',$zname)->update(['status'=>1]);

			
		 if($front_users){

		           return redirect('/admin/post/index')->with('success','解禁IP成功');
		           }
		        }catch(\Exception $e){

		            return back()->with('error','解禁IP失败');

		        }
	}
   
}
