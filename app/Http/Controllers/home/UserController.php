<?php


namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Front_users;
use App\Model\Admin\Post;
use App\Model\Home\Sys;
use DB;

class UserController extends Controller
{


	public function profile()
	{
		$rs = Front_users::where('fid',session('fid'))->get();

		$zx = Sys::get();

		$zname = Front_users::where('fid',session('fid'))->get()[0]['fname'];
		$post =Post::where('zname',$zname)->paginate(5);

		return view('home/user/profile',['rs'=>$rs,'zx'=>$zx,'post'=>$post]);
	}

	
   
  
}
   





