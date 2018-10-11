<?php


namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }
}
=======
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

    public function update(Request $request)
    {
        $res =  $request->except('_token');
 try{
        $rs = DB::table('front_users')->update($res);

              if($rs){

                return redirect('/home/face');
            }
        }catch(\Exception $e){

            return back();

        }

    }
            public function face(Request $request)
            {
                $res = $request->only('face');

        if($request->hasFile('face')){

            //自定义名字
            $name = time().rand(1111,9999);

            //获取后缀
            $suffix = $request->file('face')->getClientOriginalExtension(); 

            //移动
            $request->file('face')->move('uploads',$name.'.'.$suffix);

            $res['face'] = '/uploads/'.$name.'.'.$suffix;

        }

               try{
           
            $rs = DB::table('front_users')->update($res);


            if($rs){

                return redirect('/home/face');
            }
        }catch(\Exception $e){

            return back();

        }



            }


            public function pwd(Request $request)
            {

                //表单验证
                //获取数据库密码
                $pass = DB::table('front_users')->first();

                  
                
                //获取旧密码
                $oldpass = $request->oldpass;

                if($pass->pwd != $oldpass){
                    return back()->with('error','原密码错误');
                }

                $rs['pwd'] = $request->password;
               
                $re['pwd'] = $request->repass;
               
                $data  = DB::table('front_users')->update($rs);


                if($data && $rs['pwd'] == $re['pwd']){
                    return redirect('/home/firends');
                }else{
                    return back();
                }
                      
           



            }

    public function xinxi(Request $request)
    {
    	
    	
    	
    }
}


