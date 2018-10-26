@extends('common.home')

@section('content')



<div class='container'>
    <div <div id='d5'>
        <table class="table table-striped table   ">
            <form action="/home/user/my" method="get" class='col-md-offset-2' id='tz'>
                <tr id='as' class=''>
                    <th>
                        标题
                    </th>
                    <th>
                        作者
                    </th>
                    <th>
                        发表时间
                    </th>
                    <th>
                        删除
                    </th>
                </tr>
                @foreach($post as $k=>$vv)
                <tr class="active">
                    <!--帖子标题 -->
                    <td>
                        <h4>
                            <a href="">
                                {{$vv->title}}
                            </a>
                        </h4>
                    </td>
                    <!--帖子作者 -->
                    <td colspan="" rowspan="" headers="">
                        {{$vv->zname}}
                    </td>
                    <!--发帖时间 -->
                    <td>
                        {{date('Y年m月d日 H时i分s秒',$vv->ptime)}}
                    </td>
            </form>
            <!-- 删除帖子 -->
            <td>
                <form action='/home/user/del/{{$vv->id}}' method='get' >
                    <button class='btn btn-danger' >
                        删除
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </table>
        <div class="container  col-md-offset-4" id=''>
            {{ $post->links() }}
        </div>
    </div>

   
                       
   
                                                              
</div>
@stop