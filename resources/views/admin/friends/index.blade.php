@extends('common.admin')

@section('content')



  <div class="admin-biaogelist">
  
    <div class="listbiaoti am-cf">
      <ul class="am-icon-users"> 友情链接</ul>
      
     
      
      
      <!--这里打开的是新页面-->

    </div >
          <form action="/admin/friends" method="get"  >
        
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-3 .hidden-xs" >
              <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                <input type="text" class="am-form-field " name="fname" value='{{$request->fname}}'  placeholder="关键字查询" >

                  <span class="am-input-group-btn" >
                  <button class="am-btn  am-btn-success am-btn-success tpl-table-list-field am-icon-search" type="submit"></button>
                  </span>
              </div>
            </div>
          </form>
    <form class="am-form am-g" action="/friend/delete" method="post">
          <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
            
         
                <th class="table-id">ID</th>
                <th class="table-title">链接标题</th>
                <th class="table-type">链接地址</th>
                <th class="table-author am-hide-sm-only">链接描述</th>
                <th class="table-author am-hide-sm-only">链接图片</th>
                <th class="table-author am-hide-sm-only">操作</th>
             
              </tr>
            @foreach($rs as $k=> $v)
              <tr>
                  
                    <td>{{$v->fid}}</td>                   
                    <td>{{$v->fname}}</td>
                    <td>{{$v->flink}}</td>
                    <td>{{$v->descript}}</td>
                    <td><img src="{{$v->fpic}}" alt="" style="width:110px; "></td>
                       <td> 
                          
                             
                            

                                

                            </form>
                                        <a class='btn btn-primary' href="/admin/friends/{{$v->fid}}/edit">修改</a>

                                       <form action='/admin/friends/{{$v->fid}}' method='post'>
                                                      {{csrf_field()}}
                                                      {{method_field('DELETE')}}
                                                  <button class='btn btn-danger' >删除</button>
                                        </form>
                        </td>
              </tr>

            @endforeach
              
            </thead>
            <tbody>
     

          
       
        
              
            </tbody>
          </table>
          <style type="text/css" media="screen">
              .pagination{
                margin-left: 500px;
              }
          </style>
      <nav aria-label="Page navigation">
 
   
    <div class="container">
  
    
     {{ $rs->links() }}

    </div>
  
  
    </li>
  </ul>
</nav>
            

       
        
            </div>
  
    @stop