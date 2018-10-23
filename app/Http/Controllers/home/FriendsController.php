<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Friends;
use DB;
class FriendsController extends Controller
{
   	public function friends()
   	{	
   		$rs = Friends::get();


            
   		return view('home/friends',['rs'=>$rs]);
   	}

   	public function face()
   	{
   		$res =Friends::get();


   		return view('home/face',['rs'=>$res]);
   	}
}
