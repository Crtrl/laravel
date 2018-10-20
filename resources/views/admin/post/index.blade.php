@extends('common.admin')


@section('content')

<div class="admin-biaogelist">
    <div class="listbiaoti am-cf">
      <ul class="am-icon-users"> 帖子列表</ul>
      <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">帖子列表</a></dl>
      <!--这里打开的是新页面-->
    </div>
         <form action="/admin/post/index" method="get"  >
        
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-3 .hidden-xs" >
              <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                <input type="text" class="am-form-field " name="name" value='{{$request->name}}'  placeholder="关键字查询" >

                  <span class="am-input-group-btn" >
                  <button class="am-btn  am-btn-success am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                  </span>
              </div>
            </div>
          </form>
          <p>&nbsp;</p>

          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-check"><button class="am-btn am-btn-default am-btn-xs am-text-danger" title="批量删除"><span class="am-icon-trash-o" ></span></button></th>
                <th class="table-id">ID</th>
                <th class="table-title">板块名称</th>
                <th class="table-title">帖子名称</th>
                <th class="table-title">发表者</th>
                <th class="table-title">是否屏蔽</th>
                <th class="table-title">发表时间</th>
                <th class="table-title">发表端ip</th>
                <th class="table-author am-hide-sm-only">操作</th>
            
              </tr>
            </thead>
            <tbody>
            	@foreach($post as $k=>$v)







<tr>
                <th class="table-check"><input type="checkbox" name="pids[]" value="{{$v->id}}"/></th>
                <td>{{$v->id}}</td>
                <td>
                  @foreach ($cate as $val)
                    @if($v->cid == $val->id) 
                        {{$val->name}}
                      @endif
                  @endforeach
                </td>
                <td><a href="">{{$v->title}}</a></td>
                <td>
                  @foreach($front_users as $value)
                    @if ($v->uid  == $value->fid)
                      {{$value->fname}}
                    @endif
                  @endforeach
                </td>
                <td>@if ($v->status)否@else 是@endif</td>
                <td>{{$v->ptime}}</td>
                <td>{{$v->pip}}</td>
                
                <td >
 </form>
              	
                  
                    <form action='/admin/post/{{$v->id}}' method='post'>
                      {{csrf_field()}}
                      <button class="am-btn am-btn-default am-btn-xs am-text-danger am-round" title="删除帖子"><span class="am-icon-trash-o" >删除</span></button>
                        
                       
                    </from>
               
                 
</tr>
             @endforeach






              
            </tbody>
          </table>
           
          <hr />
          <p>注:多读书 多看报</p>
       
@stop