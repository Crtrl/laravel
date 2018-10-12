<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SysController extends Controller
{
    public function web()
    {

        
    	return view('/admin/sys/web');
    }
    public function aud()
    {
    	return view('/admin/sys/aud');
    }
    public function jinIP()
    {
    	return view('/admin/sys/jinIP');
    }
}
