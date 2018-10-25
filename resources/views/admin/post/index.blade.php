@extends('common.admin')

@section('content')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            后台用户列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
        
        <form action="/admin/post/index" method='get'>

            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    关键字:
                    <input type="text" name="gname" value='{{$request->gname}}' laceholder="关键字查询"  aria-controls="DataTables_Table_1">
                </label>
                <button class='btn btn-info'>搜索</button>
            </div>

            </form>
            
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 30px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 160px;" aria-label="Browser: activate to sort column ascending">
                            板块名称
                        </th>
                      
                          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            帖子名称
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            发表者
                        </th>

             

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            发表时间
                        </th>


                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                           审核
                        </th>

                           <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                           等级
                        </th>


                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    
                    @foreach($post as $k => $v)
                    <tr class="@if($k % 2 == 0)odd @else even @endif">
                        <td class="">
                            {{$v->id}}
                        </td>
                        <td class=" ">
                        @foreach($gn as $k=>$val)
                        @if($v->cid == $val->gid) 
                            {{$val->gname}}
                         @endif
                 @endforeach

                        </td>
                        <td class=" ">
                            <a href="" title="">
                            {{$v->title}}
                            </a>
                        </td>
                        <td class=" ">
                            {{$v->zname}}
                        </td>
                
                    <td> {{date('Y年m月d日 H时i分s秒',$v->ptime)}}</td>     


                     <td><a class="am-btn am-btn-default am-btn-xs am-text-primary am-round" href="/admin/post/jin/{{$v->id}}" title="" >禁用帖子</a>
                     <a class="am-btn am-btn-default am-btn-xs am-text-primary am-round" href="/admin/post/ip/{{$v->id}}" title="" >禁用IP</a>
                     <a class="am-btn am-btn-default am-btn-xs am-text-primary am-round" href="/admin/post/jieip/{{$v->id}}" title="" >解禁IP</a>
                    </td>


                    <td>
                          <a class="am-btn am-btn-default am-btn-xs am-text-primary am-round" href="/admin/post/lit/{{$v->id}}" title="" >加亮</a>
                          <a class="am-btn am-btn-default am-btn-xs am-text-primary am-round" href="/admin/post/top/{{$v->id}}" title="" >置顶</a>

                 </td>
                        <td class=" ">
                            <form action="/admin/friends" method='post' style='display:inline'>
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class='btn btn-danger'>删除</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                  
                </tbody>
            </table>
     
            
            <style type="text/css">
                ul.pagination{
                    height: 10px;
                    margin-top: 2px;
                    float: right;    

                }
            </style>
                        <style type="text/css">
                ul.pagination{
                    height: 10px;
                    margin-top: 2px;
                    float: right;    

                }
            </style>

            {{ $post->links() }}          
           

        </div>
    </div>
</div>

  
    @stop