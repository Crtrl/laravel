<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Model\Admin\Ad;
use Illuminate\Support\Facades\DB;


class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo '浏览广告';
        // $rs = DB::table('poster')->get();
       $rs = DB::table('poster')->where('postername','like','%'.$request->input('postername').'%')->//搜索
        paginate($request->input('num',10));//分页
        // $rs['addtime'] = time();
        // echo '<pre>';
        // var_dump($rs);
        return view('admin/ad/index',['title'=>'广告列表页','rs'=>$rs,'request'=>$request]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/ad/add',['title'=>'广告的添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $res = $request->except('_token','img');
      // dd($res);
        // dd($request->hasFile('img'));
        //文件上传
        if($request->hasFile('img')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension(); 

            //移动
            $request->file('img')->move('uploads',$name.'.'.$suffix);
        }

        $res['url'] = '/uploads/'.$name.'.'.$suffix;
        $res['addtime'] = time();
            
            $rs = Ad::create($res);

        if($rs){

            //跳转
            return redirect('/admin/ad')->with('success','添加成功');;
        } else {

            return back()->with('error','添加失败');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Ad::find($id);
        return view('admin/ad/edit',['title'=>'广告修改页面','res'=>$res]);
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
        // $res = $request->all();
        // var_dump($res);
        $res = $request->except('_token','img','_method');
         //文件上传
        if($request->hasFile('img')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension(); 

            //移动
            $request->file('img')->move('uploads',$name.'.'.$suffix);

            $res['url'] = '/uploads/'.$name.'.'.$suffix;

        }
        try{
           
            $rs = Ad::where('posterid',$id)->update($res);

            // var_dump($rs);

            if($rs){

                return redirect('/admin/ad')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

        }
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
         try{
           
            $res = Ad::where('posterid',$id)->delete();

            if($res){

                return redirect('/admin/ad')->with('success','删除成功');
            }
        }catch(\Exception $e){

            return back()->with('error','删除失败');

        }
    }
}
