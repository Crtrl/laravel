<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\SlideShows;

class IndexController extends Controller
{
	public function index()
	{
		$slideShows = SlideShows::Orderby('id','ASC')->get();
		// var_dump($slideShows);die;
		return view('home.index',[
			'slideShows'=>$slideShows
		]);
	}
    
}
