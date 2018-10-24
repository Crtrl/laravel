@extends('common.home')

@section('content')
<div class='container'>
    <form action="/home/user/my" method="get" class='col-md-offset-2' id='tz'>
  	<div   <div id='d5'>

    		                  <table class="table table-striped table   " >
                            <tr id='as' class=''>
                              
                                <th>标题 </th>
                                <th>删除 </th>
                    
                            </tr>
                    @foreach($post as $k=>$vv)    
                            <tr class="active">
                       
                           <!--帖子标题 -->
                                <td >
                                 
                                    <h4><a href="">{{$vv->title}}</a> </h4>
                                  
                                </td>
                              <!-- 帖子删除 -->

                              <td>
                              		<button type="">删除</button>
                              </td>
                              

                            </tr>
                            @endforeach
                  
                        </table>
                

                       	  		
  	</div>

   
                       
    </form>
</div>
@stop