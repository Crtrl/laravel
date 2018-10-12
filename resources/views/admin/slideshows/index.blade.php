@extends('common.admin')


@section('content')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i> 轮播图列表</span>
	</div>
	<div class="mws-panel-body no-padding">
	    <table class="mws-table">
	            <tr>
	                <th>编号</th>
	                <th>标题</th>
	                <th>预览</th>
	                <th>存放路径</th>
	                <th>操作</th>
	            </tr>

	            @foreach ($rs as $k=>$v)
				<tr>
					<td>{{$v->id}}</td>
					<td>{{$v->title}}</td>
					<td>
						<img src="{{$v->url}}" width="100">
					</td>
					<td>{{$v->url}}</td>
					<td>
						<a href="/admin/slideshows/{{$v->id}}/edit" class="btn btn-info">修改</a>
						<form action="/admin/slideshows/{{$v->id}}" method="post" style="display: inline;">
							{{csrf_field()}}
							{{method_field('DELETE')}}
							<button class="btn btn-danger" >删除</button>
						</form>
					</td>
				</tr>
				@endforeach

	    </table>
	</div>
</div>

@stop