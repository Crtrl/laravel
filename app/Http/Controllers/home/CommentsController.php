<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\home\Comments;

class CommentsController extends Controller
{
    public function comments(Request $request){
     	// 获取数据
     	$content = $request->input('content');
     	$postId = $request->input('postId');
     	// 插入数据库, 判断是否插入成功
     	try {
     		// 插入数据库
     		Comments::create([
     			'user_id' => session('fid'),
     			'post_id' => $postId,
     			'content' => $content,
     			'ctime' => time(),
     		]);
     		// 返回数据
     		return response()->json(['status' => 1, 'message' => '评论成功']);
     	} catch (\Exception $e) {
     		return response()->json(['status' => 0, 'message' => '评论失败']);
     	}

	}
}