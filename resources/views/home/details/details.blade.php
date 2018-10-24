<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <title>{{$title}}</title>
     
        <link rel="stylesheet" type="text/css" href="/css/details_one.css"/>
        <link rel="stylesheet" type="text/css" href="/css/details_two.css" />
       <link rel="stylesheet" href="/layui/css/layui.css">
    <script src="/layui/layui.all.js"></script>
        <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    </head>
    
    
    
    <body id="nv_forum" class="pg_viewthread" onkeydown="if(event.keyCode==27) return false;">
       
        <div id="wp" class="wp">
            
           
          
            <style id="diy_style" type="text/css">
            </style>
            <!--[diy=diynavtop]-->
            <div id="diynavtop" class="area">
            </div> 
            <!--路径-->
            <div id="pt" data-post="{{$data->id}}" class="bm cl">
                <div class="z">
                    <a href="/home/index" class="nvhm" title="首页">
                        首页
                    </a>
                    <em>
                        &raquo;
                    </em>
                    <a href="/home/index">
                        论坛首页
                    </a>
                    <em>
                        &rsaquo;
                    </em>
                    <a href="">
                        论坛列表
                    </a>
                    <em>
                        &rsaquo;
                    </em>
                     <a href="#">
                        {{$data->title}}
                    </a>
                </div>
            </div>
            
            <div class="wp">
                <!--[diy=diy1]-->
                <div id="diy1" class="area">
                </div>
                <!--[/diy]-->
            </div>
            <div id="ct" class="wp cl">
                <div id="pgt" class="pgs mbm cl ">
                    <div class="pgt">
                    </div>
                    <span class="y pgb">
                        <a href="">
                            返回列表
                        </a>
                    </span>
                    <a id="newspecial"  href="" title="发新帖">
                        <img src="/images/details/pn_post.png" alt="发新帖" />
                    </a>
                </div>
                <div id="postlist" class="pl bm">


                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="pls ptn pbn">
                                <div class="hm ptn">
                                    <span class="xg1">
                                        查看:
                                    </span>
                                    <span class="xi1">
                                        {{$countView}}
                                    </span>
                                    <span class="pipe">
                                        |
                                    </span>
                                    <span class="xg1">
                                        回复:
                                    </span>
                                    <span class="xi1">
                                        3
                                    </span>
                                </div>
                            </td>
                            <td class="plc ptm pbn vwthd">
                              
                                <h1 class="ts">
                               
                                    <span id="thread_subject">
                                        帖子名称: {{$data->title}}
                                       
                                    </span>
                                </h1>
                             
                            </td>
                        </tr>
                    </table>




                    <table cellspacing="0" cellpadding="0" class="ad">
                        <tr>
                            <td class="pls">
                            </td>
                            <td class="plc">
                            </td>
                        </tr>
                    </table>
                    <!-- 楼主 -->
                    <div id="post_29309906">
                        <table id="pid29309906" class="plhin" summary="pid29309906" cellspacing="0"
                        cellpadding="0">
                            <tr>
                                <td class="pls" rowspan="2">
                                    <div id="favatar29309906" class="pls favatar">
                                        <a name="newpost">
                                        </a>
                                        <div class="pi">
                                            <div class="authi">
                                                <a href="/home/user/profile" target="_blank" class="xw1">
                                                 {{$front->fname}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p_pop blk bui card_gender_" id="userinfo29309906" style="display: none; margin-top: -11px;">
                                            <div class="m z">
                                                <div id="userinfo29309906_ma">
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div>
                                            <div class="avatar">
                                                <!-- 评论者头像 -->
                                                <a href="/home/user/profile" class="avtm" target="_blank">
                                                    <img src="{{$front->face}}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="plc">
                                    <div class="pi">
                                     
                                        <strong>
                                            <a href="#" >

                                                <font color=red>
                                                    <b>
                                                        楼主
                                                    </b>
                                                </font>
                                            </a>
                                        </strong>
                                        <div class="pti">
                                            <div class="pdbt">
                                            </div>
                                            <div class="authi">
                                                <img class="authicn vm" id="authicon29309906" src="http://www.discuz.net/static/image/common/online_member.gif"
                                                />
                                                <em id="authorposton29309906">
                                                    发表于 {{date('Y-m-d H:i:s',$data->ptime)}}
                                                </em>
                                                <span class="pipe">
                                                    |
                                                </span>
                                                <a href="#">
                                                   <!--  只看该作者 -->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pct">
                                        <style type="text/css">
                                            .pcb{margin-right:0}
                                        </style>
                                        <div class="pcb">
                                              <div class="t_fsz">
                                                <table cellspacing="0" cellpadding="0">
                                                    <tr>
                                                       <td>{{$data->content}} </td>  
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="comment_29309906" class="cm">
                                            </div>
                                            <div id="post_rate_div_29309906">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                               
                            </tr>
                            <tr id="_postposition29309906">
                            </tr>
                            <tr>
                                <td class="pls">
                                </td>
                                <td class="plc" style="overflow:visible;">
                                    <div class="po hin">
                                        <div class="pob cl">
                                            <em>
                                                <a class="fastre" href="#add">
                                                    回复
                                                </a>
                                            </em>
                                            <p>
                                              
                                                <a href="javascript:;" onclick="showWindow('miscreport29309906', 'misc.php?mod=report&rtype=post&rid=29309906&tid=3647436&fid=2', 'get', -1);return false;">
                                                    <!-- 举报 -->
                                                </a>
                                            </p>
                                            
                                           
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="ad">
                                <td class="pls">
                                </td>
                                <td class="plc">
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- 第一个评论 -->
                 @foreach($comments as $key => $val)
                     <div id="post_29310434">
                        <table id="pid29310434" class="plhin" summary="pid29310434" cellspacing="0"
                        cellpadding="0">
                            <tr>
                                <td class="pls" rowspan="2">
                                    <div id="favatar29310434" class="pls favatar">
                                        <div class="pi">
                                            <div class="authi">
                                                <a href="/home/user/profile" target="_blank" class="xw1">
                                                @foreach($fronts as $k => $v)
                                                        {{$v->fname}}
                                                
                                                </a>
                                            </div>
                                        </div>
                                    
                                        <div>
                                            <div class="avatar">
                                                <a href="#">
                                                    <img src="{{$v->face}}"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </td>
                                <td class="plc">
                                    <div class="pi">
                                        <strong>
                                            <a href="#"
                                           >
                                                <font color=red>
                                                    <b>
                                                        <!-- 沙发 -->
                                                    </b>
                                                </font>
                                            </a>
                                        </strong>
                                        <div class="pti">
                                            <div class="pdbt">
                                            </div>
                                            <div class="authi">
                                                <img class="authicn vm" id="authicon29310434" src="http://www.discuz.net/static/image/common/online_supermod.gif"
                                                />
                                                <em id="authorposton29310434">
                                                    发表于 {{date('Y-m-d H:i:s',$val->ctime)}}
                                                </em>
                                                <span class="pipe">
                                                    |
                                                </span>
                                                <a href=""
                                                rel="nofollow">
                                                    <!-- 只看该作者 -->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pct">
                                        <div class="pcb">
                                            <div class="t_fsz">
                                                <table cellspacing="0" cellpadding="0">
                                                    <tr>
                                                       <td>
                                                       {!! $val->content !!}
                                                    </td>  
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="comment_29310434" class="cm">
                                            </div>
                                            <div id="post_rate_div_29310434">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="plc plm">
                                </td>
                            </tr>
                          
                            <tr>
                                <td class="pls">
                                </td>
                                <td class="plc" style="overflow:visible;">
                                 
                                </td>
                            </tr>
                            <tr class="ad">
                                <td class="pls">
                                </td>
                                <td class="plc">
                                </td>
                            </tr>
                        </table>
                    </div> 
                 @endforeach


                        <!-- 第二个评论       -->
                   <!--  <div id="post_29311815">
                        <table id="pid29311815" class="plhin" summary="pid29311815" cellspacing="0"
                        cellpadding="0">
                            <tr>
                                <td class="pls" rowspan="2">
                                    <div id="favatar29311815" class="pls favatar">
                                        <div class="pi">
                                            <div class="authi">
                                                <a href="home.php?mod=space&amp;uid=2615935" target="_blank" class="xw1">
                                                    飞翔的路灯
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p_pop blk bui card_gender_" id="userinfo29311815" style="display: none; margin-top: -11px;">
                                            <div class="m z">
                                                <div id="userinfo29311815_ma">
                                                </div>
                                            </div>
                                            <div class="i y">
                                                <div>
                                                    <strong>
                                                        <a href="home.php?mod=space&amp;uid=2615935" target="_blank" class="xi2">
                                                            飞翔的路灯
                                                        </a>
                                                    </strong>
                                                   
                                                </div>
                                             
                                           
                                               
                                            </div>
                                        </div>
                                        <div>
                                            <div class="avatar">
                                                <a href="http://www.discuz.net/home.php?mod=space&amp;uid=2615935" class="avtm" target="_blank">
                                                    <img src="http://uc.discuz.net/data/avatar/002/61/59/35_avatar_middle.jpg"
                                                    onerror="this.onerror=null;this.src='http://uc.discuz.net/images/noavatar_middle.gif'"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="plc">
                                    <div class="pi">
                                        <strong>
                                            <a href="#">
                                                藤椅
                                            </a>
                                        </strong>
                                        <div class="pti">
                                            <div class="pdbt">
                                            </div>
                                            <div class="authi">
                                                <img class="authicn vm" id="authicon29311815" src="http://www.discuz.net/static/image/common/ico_lz.png"
                                                />
                                                &nbsp;楼主
                                                <span class="pipe">
                                                    |
                                                </span>
                                                <em id="authorposton29311815">
                                                    发表于 2015-3-23 17:11:00
                                                </em>
                                                <span class="pipe">
                                                    |
                                                </span>
                                                <a href="forum.php?mod=viewthread&amp;tid=3647436&amp;page=1&amp;authorid=2615935"
                                                rel="nofollow">
                                                    只看该作者
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pct">
                                        <div class="pcb">
                                            <div class="t_fsz">
                                                <table cellspacing="0" cellpadding="0">
                                                    <tr>
                                                       <td>9999999</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="comment_29311815" class="cm">
                                            </div>
                                            <div id="post_rate_div_29311815">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="plc plm">
                                </td>
                            </tr>
                            <tr id="_postposition29311815">
                            </tr>
                            <tr>
                                <td class="pls">
                                </td>
                                <td class="plc" style="overflow:visible;">
                                    <div class="po hin">
                                        <div class="pob cl">
                                            <em>
                                                <a class="fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=2&amp;tid=3647436&amp;repquote=29311815&amp;extra=page%3D1&amp;page=1"
                                                onclick="showWindow('reply', this.href)">
                                                    回复
                                                </a>
                                            </em>
                                            <p>
                                               
                                                <a href="javascript:;" onclick="showWindow('miscreport29311815', 'misc.php?mod=report&rtype=post&rid=29311815&tid=3647436&fid=2', 'get', -1);return false;">
                                                    举报
                                                </a>
                                            </p>
                                          
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="ad">
                                <td class="pls">
                                </td>
                                <td class="plc">
                                </td>
                            </tr>
                        </table>
                      
                    </div> -->
               
                  
                </div>
           
             
                
             <!-- 编辑器评论框  -->
                <div id="f_pst" class="pl bm bmw" >
                    <a name="add"></a>
                    <form method="post"  id="fastpostform" action="">
                        <input type="hidden" name="text" value="" id="input">
                        <table cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="pls">
                                </td>
                                <td class="plc">
                                   
                                    <div class="cl">
                                      
                                        <div class="hasfsl" id="fastposteditor">
                                            <!-- 富文本编辑器 -->
                                            <div class="tedt mtn" style="width: 750px">
                                            
                                                <textarea id="editor" style="display: none;"></textarea>
<script>
$(function() {
    var editor = null;
    var index = 0;

    layui.use('layedit', function(){
    editor = layui.layedit;
    // 生成编辑器
    index = editor.build('editor', {
        tool: ['face'],
            height: 200,
        });
    });

    // console.log(index);
    $("#new-comment").click(function() {
        var layer = {};
        layui.use('layer', function(){
            layer = layui.layer;
        });


        // 获取值
        var content = editor.getContent(index);
        var postId = $("#pt").attr('data-post');
        if (content === "") {
            layer.msg('内容不能为空', {icon: 5});
            return;
        }
        // 发起ajax请求
        $.ajax({
            url: "/home/comments",
            data: {content:content, postId: postId },
            type: "GET",
            dataType: "JSON",
            error: function () {
                layer.msg('数据请求失败!', {icon: 5});
            },
            success: function  (response) {
                // 提示
                if (response.status == 1) {
                    layer.msg(response.message, {icon: 6});
                    window.location.reload(true);
                } else {
                    layer.msg(response.message, {icon: 5});
                }
            }
        });
    });

    // console.log(content);
});
</script>

                                            </div>
                                        </div>
                                    </div>
                                   
                                  
                                    <p class="ptm pnpost">
                                           {{csrf_field()}}
                                      <input type="button" value="发表回复" id="new-comment" class="pn pnc vm">
                                        
                                      
                                      
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                
                
               
            </div>
           
         
        </div>
     
       
       
       
      
     
       
       


        
    </body>

</html>