<?php

namespace App\Http\Controllers\admin;

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
        //判断内容是否为空
        if(!$request->input('title') ){
            return back()->withErrors(['标题不能为空']);
        }

        if (!$request->hasFile('file_upload')) {
            return back()->withErrors(['请选择图片']);
        }
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
            $extension = $file->getClientOriginalExtension();
            //设置名字  
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$extension;

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
        $rs = SlideShows::find($id);
        return view('admin.slideShows.edit',['rs'=>$rs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Model\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideShows $slideShows, $id)
    {
        $rs = $request->except('_token','_method','file_upload');
        $rs['title'] = $rs['title'];

        //判断是否有文件上传
        if($request->hasFile('file_upload')){
            //删除原图片文件
            $url = SlideShows::find($id);
            unlink(public_path().$url->url);

            //保存图片
            $file = $request->file('file_upload');
            //判断文件是否有效
            if($file->isValid()){
                //上传文件的后缀名
                $extension = $file->getClientOriginalExtension();
                //设置名字  
                $newName = date('YmdHis').mt_rand(1000,9999).'.'.$extension;

                $path = $file->move('uploads',$newName);

                $filepath = '/uploads/'.$newName;

                $rs['url'] = $filepath;

            }
        }
        // dd($rs);
        try{
            SlideShows::where('id',$id)->update($rs);
        }catch(\Exception $e){
            return back()->with('error','修改失败');
        }
        
        return redirect('admin/slideshows')->with('success','修改成功');
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
            $url = SlideShows::find($id);
            
            unlink(public_path().$url->url);

            SlideShows::destroy($id);

            return redirect('/admin/slideshows')->with('error','删除成功');
        }catch(\Exception $e){
            return back()->with('error','删除失败');
        }
        
    }


}
