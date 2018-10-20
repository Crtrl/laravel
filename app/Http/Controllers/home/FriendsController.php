<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class FriendsController extends Controller
{
   	public function friends()
   	{	
   		$rs = DB::table('friends')->get();

   		return view('home/friends',['rs'=>$rs]);
   	}

   	public function face()
   	{
   		$res = DB::table('front_users')->get();


   		return view('home/face',['rs'=>$res]);
   	}
}
