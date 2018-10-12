@extends('common.home')

@section('content')
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="/admin/js/site.min.js">
        </script>
        <link type="text/css" rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="/admin/bootstrap/js/bootstrap.js">
        </script>
        <script type="text/javascript" src="/admin/js/jquery.min.js">
        </script>
        <title>
        </title>
    </head>
    <style type="text/css" media="screen">
        #ta{ width: 900px; height: 500px; margin-left: 320px; float: left; position:
        relative; } li{ display:inline; } #dv{ position: relative; float: left;
        } #xx { margin-left: 200px; margin-top: 180px; } #d1 { margin-left: 200px;
        margin-top: 50px; } #d2 { margin-left: 200px; margin-top: 50px; padding-top:
        50px; } #vv{ margin-left: 100px; float: left; }
    </style>
    
    <body style="background:#000000">
        <br/>
        <br/>
        <table align="center" style="margin-left:400px" >
            <tr>
                <td>
                    <li onclick="dianji(1)" style="list-style-type:none">
                        <button type="button" class="btn btn-info" id='xg' data-toggle="tooltip"
                        data-placement="left" title="Tooltip on left">
                            修改信息
                        </button>
                    </li>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li onclick="dianji(2)" style="list-style-type:none">
                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                            修改密码
                        </button>
                    </li>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li onclick="dianji(3)" style="list-style-type:none">
                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom"
                        title="Tooltip on bottom">
                            修改头像
                        </button>
                    </li>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li onclick="dianji(4)" style="list-style-type:none">
                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="right"
                        title="Tooltip on right">
                            我的关注
                        </button>
                    </li>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                </td>
            </tr>
        </table>
        <table id='ta' align="center" style="color:red">
            <tr id='dv'>
                <td colspan="" rowspan="" headers="">
                    <div id='d1'>
                        <form action='/home/user/update' method="get">
                         @foreach($rs as $k=>$v)
                            <div class="form-group" .hidden-xs>
                                <label for="exampleInputEmail1">
                                    昵称:
                                </label>
                                <input type="" class="form-control" name='fname' id="exampleInputEmail1"
                                placeholder="请输入昵称" value="{{$v->fname}}">
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="form-group" .hidden-xs>
                                <label for="exampleInputEmail1">
                                    电话:
                                </label>
                                <input type="" class="form-control" name='phone' id="exampleInputEmail2"
                                placeholder="请输入电话" value="{{$v->phone}}">
                            </div>
                            &nbsp; &nbsp; &nbsp;
                            <div class="form-group" .hidden-xs>
                                <label for="exampleInputEmail1">
                                    性别:
                                </label>
                                <input type="radio" name="sex" value="1" placeholder="" @if($v->
                                sex == '1') checked="checked" @endif >男
                                <input type="radio" name="sex" \ value="0" placeholder="" @if($v->
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
                            &nbsp; &nbsp; @endforeach &nbsp; &nbsp;
                            <div class="am-form-group am-cf">
                                <div class="you" style="margin-left: 11%;">
                                    <button type="submit" class="btn-danger">
                                        提交
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                    <div id='d2' style="display:none">
                        <form action="/home/user/pwd" method="get">
                            <table id='vv'>
                                <div>
                                    <tr>
                                        <td>
                                            原密码　：
                                        </td>
                                        <td>
                                            <input type="password" name="oldpass" />
                                        </td>
                                    </tr>
                                </div>
                                <tr>
                                    <td>
                                        新密码　：
                                    </td>
                                    <td>
                                        <input type="password" name="password" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        确认密码：
                                    </td>
                                    <td>
                                        <input type="password" name="repass" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        　　
                                    </td>
                                    <td>
                                        <input type="submit" value="确认修改" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div id="d3" style="display:none">
                        <form action='/home/user/face' method="post" enctype='multipart/form-data'
                        target='_parent'>
                            {{ csrf_field() }}
                            <table id='xx'>
                                <tr>
                                    <td>
                                        上传头像:
                                    </td>
                                    <td>
                                        <input type="file" name="face" />
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="height:50px">
                                        <input type="submit" id='vv' value="提交">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </td>
            </tr>
            </div>
        </table>
        <script type="text/javascript">
            //选项卡JS设置
            function dianji(sum) {
                var i;
                for (i = 1; i <= 3; i++) {
                    if (i == sum) {
                        document.getElementById("d" + i).style.display = "block";
                    } else {
                        document.getElementById("d" + i).style.display = "none";
                    }
                }
            }
        </script>
    </body>

</html>

@stop