<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Category;
// use Illuminate\Support\Facades\DB;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // echo 'index';
         //子类紧挨着父类
         $rs = Category::select(DB::raw('*,concat(path,gid) as paths'))->
        where('gname','like','%'.$request->input('gname').'%')->//搜索
        orderBy('paths')->
        paginate($request->input('num',10));//分页
          //父类与子类上下区别
         foreach($rs as $k => $v){
            //path  0,1,4
            $n = substr_count($v -> path, ',') - 1;
            $v->gname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> gname;
            // $v->catename = str_repeat('|--', $n).$v -> catename;
        }
        //后台浏览页面
        return view('admin.category.index',['title'=>'分类列表','rs'=>$rs,'request'=>$request]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //子类紧挨着父类
         //select *,concat(path,gid) as paths from category order by paths
        $rs = Category::select(DB::raw('*,concat(path,gid) as paths'))->
            orderBy('paths')->get();
            // dd($rs);
        //父类与子类上下区别
           
            foreach($rs as $k => $v){
            //path  0,1,4
            $n = substr_count($v -> path, ',') - 1;
            $v->gname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> gname;
            // $v->catename = str_repeat('|--', $n).$v -> catename;
          
        }
        // dd($arr);
         
       //添加分类页面
     return view('admin.category.add',['title'=>'添加分类','rs'=>$rs]);

       
        // 有条件用get,没有条件用all
        // echo 'create';
        // $ra = Category::selete();
        
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
        // echo 'store';
        //获取数据,处理数据
        $rs = $request->except('_token','img');
        // dd($rs);
         //文件上传
        if($request->hasFile('img')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension(); 

            //移动
            $request->file('img')->move('uploads',$name.'.'.$suffix);
             $rs['url'] = '/uploads/'.$name.'.'.$suffix;
        }

        
        // dd($rs);
        if($rs['pid'] == '0'){
            $rs['path'] = '0,';
        }else{
            $data = Category::where('gid',$rs['pid'])->first();
            // dd($data);
             $rs['path'] = $data->path.$data->gid.',';
                         //父类的path0,  +  子类的pid3  + ,
        }
      // dd(Category::create($rs));  
        //往数据库填加数据
        try{
           
            $info =  Category::create($rs);


            if($info){

                return redirect('/admin/category')->with('success','添加成功');
            }
        }catch(\Exception $e){

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
       $data = Category::find($id);
       //查询父级类,让子级分类在父级分类下面
        $info = Category::select(DB::raw('*,concat(path,gid) as paths'))->
            orderBy('paths')->get();
          foreach($info as $k => $v){
            //path  0,1,4
            $n = substr_count($v -> path, ',') - 1;
            $v->gname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> gname;
            // $v->catename = str_repeat('|--', $n).$v -> catename;
        }
        return view('admin.category.edit',['title'=>'修改类名','rs'=>$data,'info'=>$info]);
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
        $rs = $request->only('gname');
        // dd($rs);
         // $data = Category::where('gid',$id)->update($rs);
         // dd($data);
         try{
           
            $data = Category::where('gid',$id)->update($rs);

            if($data){

                return redirect('/admin/category')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return redirect('/admin/category')->with('error','修改失败');

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
       // echo $id;
        $cate = Category::where('pid',$id)->first();
        // 这里查询用first,get查出来的是一个数组对象 对象里面有一个空数组,find查询报错
        // echo '<pre>';
       // var_dump($cate);
        var_dump((bool) $cate);
        if ($cate) {
           return back()->with('error','删除失败');
        }
          try{
           
            $res = Category::where('gid',$id)->delete();
            // dd($res);
            if($res){

                return redirect('/admin/category')->with('success','删除成功');
            }
        }catch(\Exception $e){

            return back()->with('error','删除失败');

        }
      
     
      





    
    }

}

