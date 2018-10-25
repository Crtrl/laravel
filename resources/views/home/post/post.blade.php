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
          
        background:url("/images/you.jpg") right top no-repeat,            
        url("/images/zuo.jpg") left top no-repeat;  
        background-size:100% 100%;
        background-attachment: fixed;
        line-height: normal;
        font-weight: normal;
        background-size:contain;
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
                        <h3><a href="/home/index" title="">首页</a>->{{$cate->name}}</h3>
                        <div>
                            <!-- 获得板块缩略图 -->
                               
                        <strong>
                            
                            <img src="{{$rs->face}}" width="120" alt="">
                           
                        </strong>
                           
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
                            <b>{{$cate->name}}</b>
                            <span>|</span>
                            <strong>
                                总帖数:
                            </strong>
                            <!-- 显示帖子总数 -->
                           
                            <b>{{$zong}}</b>
                            
                        </span>
                        <strong style="display:block;min-width:300px; color:white;" id='nn'>我很喜欢听你的歌 那么你呢?</strong>
                        </div>

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
                        @foreach($list as $k=>$v)    
                        <tr class="active">
                            <td class="success">
                                @if($v->liang==1)
                                <img src='/home/images/topichot.gif'/>
                                @endif
                                &nbsp;                             
                                @if($v->top==1)
                                <img src='/home/images/headtopic_3.gif'/>
                                @endif
                            </td>
                        <!--帖子标题 -->
                            <td>
                                <h4><a href="">{{$v->title}}</a> </h4>
                            </td>
                        <!--帖子作者 -->
                            <td colspan="" rowspan="" headers="">
                                    {{$v->zname}}
                            </td>
                           
                        <!--发帖时间 -->
                            <td>
                              {{date('Y年m月d日 H时i分s秒',$v->ptime)}}
                            </td>
                        <!--内容简介 -->
                            <td >
                                <div style="width:150px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                                    {{$v->content}}
                                </div>
                            </td>
                        <!-- 收藏 -->
                            @if( !empty($rs->favorite) && in_array( $v->id, explode(',',$rs->favorite) ) )
                            <td>
                                <a href="javascript:void(0)" data-href="/home/user/sc/{{$v->id}}" class="action" data-action="0" >取消收藏</a>
                            </td>
                            @else 
                            <td>
                                <a href="javascript:void(0)" data-href="/home/user/sc/{{$v->id}}"  class="action" data-action="1" >收藏</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
              
                    </table>
                </div>
                
            </div>
        </div>
    </div>

            <br><br><br>
            <!-- 快速发帖 -->
            <form action='/home/post/add' method="get"   enctype="multipart/form-data">
                <div class="success container col-md-offset-2" id='sf'> <h2>快速发帖:</h2></div>  
                <div class="container col-md-offset-4" > 帖子标题 : <input type="text" name="title" id='tz' value="" placeholder="">
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
        //收藏
        $(function(){
            $(".action").click(function() {
                // 判断是收藏, 还是取消收藏
                var actionType = $(this).attr("data-action") == 1 ? 1 : 0;

                // 获取帖子id
                var url = $(this).attr("data-href");

                //声明$(this)
                var bts = $(this);
                $.ajax({
                    url: url,
                    data: {actionType: actionType},
                    dataType: "JSON",
                    type: "GET",
                    success: function(response) {
                        if(response.status == 1){
                            bts.text('取消收藏');
                            bts.attr('data-action','0');
                            alert(response.message);
                        } else if (response.status == 2){
                            bts.text('收藏');
                            bts.attr('data-action','1');
                            alert(response.message);
                        }  
                       
                    },
                    error: function(response) {
                        alert("收藏失败!");
                    }
                });
            });

        });
    </script>
</table>
</body>
