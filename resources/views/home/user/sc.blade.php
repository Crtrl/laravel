@extends('common.home')

@section('content')



<div class='container'>
    <div <div id='d5'>
        <table class="table table-striped table   ">
            <tr id='as' class=''>
                <th>
                    标题
                </th>
                <th>
                    作者
                </th>
                <th>
                    内容
                </th>
                <th>
                    发表时间
                </th>
                <th>
                    操作
                </th>
            </tr>
            @foreach($post as $k=>$v)
            <tr class="active">
                <!--帖子标题 -->
                <td>
                    <h4>
                        <a href="">
                            {{$v->title}}
                        </a>
                    </h4>
                </td>
                <!--帖子作者 -->
                <td colspan="" rowspan="" headers="">
                    {{$v->zname}}
                </td>
                <!-- 内容 -->
                <td>
                    {{$v->content}}
                </td>
                <!--发帖时间 -->
                <td>
                    {{date('Y年m月d日 H时i分s秒',$v->ptime)}}
                </td>
            <!-- 删除帖子 -->
                <td>
                    <a href="javascript:void(0)" data-href="/home/user/sc/{{$v->id}}" class="action" data-action="0" >取消收藏</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="container  col-md-offset-4" id=''>
            {{ $post->links() }}
        </div>
    </div>                                                            
</div>
    <script type="text/javascript">
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
@stop