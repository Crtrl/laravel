<script src="/ueditor/ueditor.config.js"></script>
<script src="/ueditor/ueditor.all.min.js"></script>
<script src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/home/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="/home/js/jquery-1.11.1.min.js"></script>

<!--bootstrap-->
     <link type="text/css" rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="/admin/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/admin/bootstrap/js/jquery-1.8.3.js"></script>

<!-- //js -->
<!-- for-gallery-rotation -->
<script src="/home/js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="/home/css/flexslider.css" type="text/css" media="screen" />
<script defer src="/home/js/jquery.flexslider.js"></script>

<style media="screen">
    #tz{
        width: 300px;
        border: solid 2px green;
    }

    #cc{
        background-image: url(/images/u2.jpg);              
        background-size:1200px;              
    }
    
    body{
          

            background:url("/images/33.jpg");
            background-size:2200px 2100px;
            background-repeat:no-repeat;
                
       


    }
    
    #cb{
        background: gray;
        width: 100%;
    }

    .cx{
        border: 1px solid gray;
        background: gray;
        height: 50px;
        font-size: 20px;
        line-height: 50px;
        color: yellow;
    }

    .cv{
        float: right;
        line-height: 50px;
        font-size: 20px;
    }

    .cc{
         font-size: 40px;
         text-align: center;
         color: white;
    }

    #img{
        width: 300px;
        height: 100px;
    }

    #ss{
        width: 26px;
        font-size: 15px;
        margin-top: 10px;
    }
    .bb{
        font-size: 30px;
    }
    #nn{
       
        font-size: 20px;
    }
    #mm{
        width: 400px;
    }
    #as{
        background: red;
    }
    .active{
         background: red;
    }
    #tz{
        height: 30px;
    }


</style>
<body >

<table id='cb'>
    <tr>
     <td class='cx'><a href="" title="">星空论坛</a>  <a href="" title=""> <span style="color:black"> | 有料</span><span style="color:orange">社区</span></a> </td>

     <td class='cc'><b><span >www.starysky.com</span></b></td>

    <td class='cv'><a href="" title="">下载游戏 </a>  &nbsp;  &nbsp; </td>
    <td class='cv'><a href="" title="">游戏问答 | &nbsp; &nbsp; </a></td>
 
    </tr> 
    
       
</table>



    <br><br><br>
<div>
   <div id="list-content" >
            <div class="container" >
                <div class="bNav">
                
                
                
                </div>
                <br><br><br>
<div  id = 'cc'>
                <div id="list-detail"  style="color:white;">
                    <h3><a href="/home/index" title="">首页</a>->
                    @foreach ($res as $k=>$v)
                        {{$v->gname}}
                    @endforeach
                    </h3>
                    <div>
                        <!-- 获得板块缩略图 -->
		@foreach($rs as $k=>$vz)
			<img src="{{$vz->face}}"  width="83" alt="" style="margin: 0px;" />
	
                           
                        <span style="color:white;" class="bb" >
                            <strong >
                                今日:
                            </strong>
                            <!-- 显示今天所发的帖子 -->
                            <b>{{$today}}</b>
                            <span>|</span>
                            <strong>
                                主题:
                            </strong>
                            <!-- 显示帖子所在的板块名称 -->
                            <b>  @foreach ($res as $k=>$v)
                                    {{$v->gname}}
                                 @endforeach
                            </b>
                            <span>|</span>
                            <strong>
                                总帖数:
                            </strong>

                            <!-- 显示帖子总数 -->
                           
                            <b>{{$zong}}</b>
                            
                        </span>
                        <strong style="display:block;min-width:300px; color:white;" id='nn'>{{$vz->descript}}</strong>
                        </div>
</div>
                    </div>
                    	@endforeach
                          <div class="container">
        
                <div class="form-group">

                @if(session('success'))  
                    <div class="mws-form-message success">
                        {{session('success')}}  
                    </div>
                @endif

                @if(session('error'))  
                    <div class="mws-form-message warning">
                        {{session('error')}} 
                    </div>
                @endif
                </div>
            
                    <!-- 查询 -->
                    <form action="/home/post" method="get"  style="float:right;height:40px">               
                        <input type="text" name="title" id='mm'  value="{{$request->title}}"  placeholder="请输入帖子标题关键字" style="width:300px;height:35px" >
                        <button type="">
                        <span id='ss'  class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>

                </div>
                <div class="clear"></div>
                <!-- 帖子列表 -->
                <div class="container">
                    <table class="table table-striped  ">
                        <tr id='as'>
                            <th>&nbsp;</th>
                            <th>标题 </th>
                            <th>作者 </th>
                            <th>发表时间</th>
                            <th>内容简介&nbsp; &nbsp;</th>
                            <th>收藏</th>
                        </tr>
                        @foreach($list as $k=>$vv)    
                        <tr class="active">
                            <td class="success">
                                @if($vv->liang==1)
                                <img src='/home/images/topichot.gif'/>
                                @endif
                                &nbsp;                             
                                @if($vv->top==1)
                                <img src='/home/images/headtopic_3.gif'/>
                                @endif
                            </td>
                        <!--帖子标题 -->
                            <td>
                                <h4><a href="/home/details/{{$vv->id}}">{{$vv->title}}</a> </h4>
                            </td>
                        <!--帖子作者 -->
                            <td colspan="" rowspan="" headers="">
                                    {{$vv->zname}}
                            </td>
                           
                        <!--发帖时间 -->
                            <td>
                              {{date('Y年m月d日 H时i分s秒',$vv->ptime)}}
                            </td>
                        <!--内容简介 -->
                            <td >
                                <div style="width:150px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                                    {{$vv->content}}
                                </div>
                            </td>
                        <!-- 收藏 -->
                            <td>
                                <a href="/home/post/sc" title="">收藏</a>
                            </td>
                            
                        </tr>
                        @endforeach
              
                    </table>

                </div>
                
            </div>
        </div>
    </div>


        <br><br><br>

          <div class="container text-center " id='' >
  
    
           {{ $list->links() }}

          </div>

                @foreach($rs as $k=>$v)
                        {{$v->gid}}
                @endforeach
                    <form action='/home/post/add/{{$gn->gid}}' method="post"   enctype="multipart/form-data">
                    {{csrf_field()}}
              <div class="success container col-md-offset-2" style='color:red' id='sf'> <h2>快速发帖:</h2></div>  
<div class="container col-md-offset-4" style="color:red" >
        帖子标题 : <input type="text" name="title" id='tz' value="" placeholder="">
</div>
<br><br><br>
        <div class="container">
          <script class="col-md-offset-1" id="editor" name="content" type="text/plain" style="width:1024px;height:300px;">
              

                          
                    </script>
                </div>


                <br><br><br><br>


                <div class="list-page">
                    <button type="submit"  class='btn-danger col-md-offset-6' style="width:100px;height:50px" >发帖</button>
                           
                </div>


            </form>
<!-- 
              //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例 -->
    <!-- 编辑机器实例化 -->
    <script type="text/javascript">
        var ue = UE.getEditor('editor');

    </script>
</table>
</body>
