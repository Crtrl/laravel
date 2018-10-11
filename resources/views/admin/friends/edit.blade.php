@extends('common.admin')

@section('content')

<form action='/admin/friends/{{$res->fid}}' method="post"   enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group".hidden-xs>
    <label for="exampleInputEmail1">标题:</label>
    <input type="" class="form-control" name='fname' id="exampleInputEmail1" placeholder="请输入标题" value="{{$res->fname}}">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">链接地址:</label>
    <input type="" class="form-control"  name='flink' id="exampleInputEmail1" placeholder="请输入地址" value="{{$res->flink}}">
  </div> 
      <div class="am-form-group am-cf ">
          <div class="zuo" >描 述：</div>
          <div class="you">
            <textarea class="" style="height:100px;resize:none;" rows="2" id="doc-ta-1" name="descript" >{{$res->descript}}</textarea>
          </div>

        </div>
&nbsp; &nbsp;
  <div>
    <input type="file" id="exampleInputFile" name='fpic'  >
         <img src="{{$res->fpic}}" alt="" width='100px'>
</div>
    &nbsp; &nbsp;
       <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="reset" class="btn-primary">重置</button>&nbsp;  &raquo; &nbsp; <button type="submit" class="btn-danger">提交</button>
          </div>
        </div>

  </div>
  <div class="checkbox">

  </div>
   
</form>

    @stop