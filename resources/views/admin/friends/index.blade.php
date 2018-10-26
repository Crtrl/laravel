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
        
        <form action="/admin/friends" method='get'>

            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    关键字:
                    <input type="text" name="fname" laceholder="关键字查询" value='{{$request->fname}}' aria-controls="DataTables_Table_1">
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
                            链接标题
                        </th>
                      
                          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            链接地址
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            链接描述
                        </th>

                          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            链接图片
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    
                    @foreach($rs as $k => $v)
                    <tr class="@if($k % 2 == 0)odd @else even @endif">
                        <td class="">
                            {{$v->fid}}
                        </td>
                        <td class=" ">
                            {{$v->fname}}
                        </td>
                        <td class=" ">
                            {{$v->flink}}
                        </td>
                        <td class=" ">
                             {{$v->descript}}
                        </td>
                        <td class=" ">
                            <img src="{{$v->fpic}}" alt="" style="width:110px; ">
                        </td>          
                        <td class=" ">
                            <a class='btn btn-primary' href="/admin/friends/{{$v->fid}}/edit">修改</a>
                            <form action="/admin/friends/{{$v->fid}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class='btn btn-danger'>删除</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                  
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>
            
            <style type="text/css">
                ul.pagination{
                    height: 10px;
                    margin-top: 2px;
                    float: right;    

                }
            </style>

            {{ $rs->links() }}               

        </div>
    </div>
</div>

  
    @stop