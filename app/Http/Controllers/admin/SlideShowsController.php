<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\SlideShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\SlideShows;

class SlideShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = SlideShows::Orderby('id','ASC')->get();
        return view('admin.slideshows.index',[
            'title'=>'轮播图列表',
            'rs'=>$rs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slideshows.create',[
            'title'=>'轮播图添加页面',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //限制轮播图数量
        $num = SlideShows::count();
        // dd($num);
        if($num>4){
            return back()->withErrors(['轮播图最大数量为5个']);
        }
        //图片上传
        $file = $request->file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            //上传文件的后缀名
            $entension = $file->getClientOriginalExtension();
            //设置名字  32948324324832894.jpg
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;

            $path = $file->move('uploads',$newName);

            $filepath = '/uploads/'.$newName;

            $res['url'] = $filepath;

            $res['title'] = $request->input('title');
            // User::where('id',session('uid'))->update($res);
            // dd($res);
            SlideShows::create($res);

            return redirect('admin/slideshows');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Model\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function show(SlideShows $slideShows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Model\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideShows $slideShows,Request $request,$id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Model\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideShows $slideShows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Model\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideShows $slideShows, $id)
    {
        try{

            SlideShows::destroy($id);

        }catch(\Exception $e){
            return back()->with('error','删除失败');
        }
        return redirect('/admin/slideshows');
    }


}
