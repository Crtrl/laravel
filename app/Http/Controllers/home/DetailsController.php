<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\home\Post;
use App\Model\home\Front_users;
use DB;
use App\Model\home\Comments;

class DetailsController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        // echo "index";
         //查看数量
        // 查询数据
        $post = Post::find($id);
        // 修改数据的值
        $post->val++;
        // 保存到数据库
        $post->save();
        // 赋值并分配
        $countView = $post->val;


        //根据ID获取内容数据
        $data = DB::table('post')->where('id',$id)->first();
        //获取用户信息
        // $front = DB::table('Front_users')->where('fid',session('fid'))->first();
        //根据内容获取楼主用户信息
        $fronts = Front_users::where('fid',$data->fuid)->get();
        //根据内容ID获取评论
         $comments = Comments::where('post_id',$id)->get();
        // dd($fronts);

        // dd($username->fname);
         //把值分配给详情页面    
         return view('home/details/details',[
            'title'     => '帖子详情页',
            'data'      => $data,
            'countView'=> $countView,
            'comments' => $comments,
            'fronts'   => $fronts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo 'show';0
         //查看数量
        // 查询数据
        $post = Post::find($id);
        // 修改数据的值
        $post->val++;
        // 保存到数据库
        $post->save();
        // 赋值并分配
        $countView = $post->val;


        //根据ID获取内容数据
        $data = DB::table('post')->where('id',$id)->first();
        //获取用户信息
        // $front = DB::table('Front_users')->where('fid',session('fid'))->first();
        //根据内容获取楼主用户信息
        $fronts = Front_users::where('fid',$data->fuid)->get();
        //根据内容ID获取评论
         $comments = Comments::where('post_id',$id)->get();
        // dd($fronts);

        // dd($username->fname);
         //把值分配给详情页面    
         return view('home/details/details',[
            'title'     => '帖子详情页',
            'data'      => $data,
            'countView'=> $countView,
            'comments' => $comments,
            'fronts'   => $fronts
        ]);
      
     
    
      
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo 'destroy';
    }
}
