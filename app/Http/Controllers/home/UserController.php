<?php



namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{


   
        public function profile()
    {
        $rs = DB::table('front_users')->get();

       
        return view('home/user/profile',['rs'=>$rs]);
    }
}


