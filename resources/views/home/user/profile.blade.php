@extends('common.home')

@section('content')

<style type="text/css">
    #lg{ height: 140px; } body{ background:url("/images/3.jpg");  background-size:2200px;
    } #xinxi{ float:left; position: absolute; margin-top: -550px;  padding-top:
    50px; width: 400px; }
    #d2{
        display: none;
    }
     #d3{
        display: none;
    }
     #d4{
        display: none;
    }
    #d5{
    	display: none;

    }

    #tz{
    	width: 800px;
    	 float:left;
    	 margin-top: -450px;
    	  margin-left: 500px;

    }

   
    	
   
</style>
<div>
    <a href="/home/index">
        <img id='lg' src="/images/zhong.jpg" alt="" width="100%">
    </a>
</div>

<div class='container'>
    <br>
    <br>
   <br>
   <br>
      
   <br>
    <li onclick="dianji(1)" style="list-style-type:none">
        <button type="button" class="btn  btn-primary">
            修改信息
        </button>
    </li>
    <br>
    <br>
    <br>
 
    <li onclick="dianji(2)" style="list-style-type:none">
        <button type="button" class="btn  btn-primary">
            修改密码
        </button>
    </li>
    <br>
    <br>
    <br>
  <br>

    <li onclick="dianji(3)" style="list-style-type:none">
        <button type="button" class="btn  btn-primary">
            修改头像
        </button>
    </li>
    <br>
    <br>
    <br>
    <br>

      <li onclick="dianji(5)" style="list-style-type:none">
       <a href="/home/user/my" title=""> <button type="button" class="btn  btn-primary">
            我的帖子
        </button></a>
    </li>
    <br>
    <br>
    <br>
  <br>
 
   
    
          <li onclick="dianji(6)" style="list-style-type:none">
       <a href="/home/user/sc" title=""> <button type="button" class="btn  btn-primary">
            我的收藏
        </button></a>
    </li>
    <br>
    <br>
    <br>
  <br>
  
    </div>
    <div class="col-md-offset-5"> 
    <form action='/home/user/update' method="get" 
    id='xinxi'>
        <!-- 修改信息 -->
        <div id='d1'>
     
            <div class="form-group  ">
            @foreach($rs as $k=>$v)
                <label for="exampleInputEmail1">
                   昵称
                </label>
                <input type="text" class="form-control" name='fname' id="exampleInputEmail1" placeholder="请输入用户名"  value="{{$v->fname}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2" name='phone'>
                    电话
                </label>
                <input type="text" name='phone' class="form-control" id="exampleInputPassword2" value="{{$v->phone}}"
                placeholder="请输入密码">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">
                    性别
                </label>
                <input type="radio" name="sex" value="1" placeholder="" @if($v->
                                sex == '1') checked="checked" @endif >男
                
                <input type="radio" name="sex" value="0" placeholder="" @if($v->
                                sex == '0') checked="checked" @endif >女
              
                <input type="radio" name="sex" value="2" placeholder="" @if($v->
                                sex == '2') checked="checked" @endif >保密
                
            </div>
                &nbsp; &nbsp; &nbsp;
                            <div class="am-form-group am-cf ">
                                <div class="zuo">
                                    描 述：
                                </div>
                                <div class="you">
                                    <textarea class="" style="height:100px;resize:none;" name="descript" rows="2"
                                    id="doc-ta-1" name="descript" placeholder="这个人很懒,什么也没留下">
                                        {{$v->descript}}
                                    </textarea>
                                </div>
                            </div>
                            @endforeach

            <button type="submit" class="btn btn-default">
                提交
            </button>

        </div>
    </form>
                </div>
    <!-- 修改密码 -->
    <div class="col-md-offset-3"> 
    <form  action="/home/user/pwd" method="get" class='col-md-offset-2' id='xinxi'>
        <div id='d2'>
            <div class="form-group">
                <label for="exampleInputEmail1">
                    原密码
                </label>
                <input type="password" name="oldpass" class="form-control" id="exampleInputEmail21" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">
                    新密码
                </label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword11"
                placeholder="请输入密码">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">
                    确认密码
                </label>
                <input type="password" name="repass" class="form-control" id="exampleInputPassword10"
                placeholder="请输入密码">
            </div>
            <button type="submit" class="btn btn-default">
                提交
            </button>
        </div>
    </form>
    </div>
    <!-- 修改头像 -->
     <div class="col-md-offset-3"> 
    <form action='/home/user/face' method="post" class='col-md-offset-2' id='xinxi' enctype='multipart/form-data'
                        target='_parent'>
    {{ csrf_field() }}
        <div id='d3'>
            <div class="form-group">
                <label for="exampleInputEmail1">
                    上传头像
                </label>
                <br>
                <br>
                <img width="100" src="{{$v->face}}">
                <input type="file" name="face" />
                <br>
                <br>
                <br>
                <input type="submit" id='vv' value="提交">
            </div>
        </div>
    </form>
        </div>
    <!-- 我的关注 -->
      <form  action="/home/user/pwd" method="get" class='col-md-offset-2' id='xinxi'>
        <div id='d4'>
        <table border="1">
    
   
                    <tr>
                                    <td>我关注的用户</td>
                                    <td>关注用户所发帖子数</td>
                                    <td></td>
                    </tr>
                         
                    <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="noguan" href=''>取消关注</td>
                     </tr>
                                
           </table>           
        </div>
    </form>


     
</div>
</div>
   
 
    
















   <script type="text/javascript">
            //选项卡JS设置
            function dianji(sum) {
                var i;
                for (i = 1; i <= 5; i++) {
                    if (i == sum) {
                        document.getElementById("d" + i).style.display = "block";
                    } else {
                        document.getElementById("d" + i).style.display = "none";
                    }
                }
            }
        </script>
@stop