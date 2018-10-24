@extends('common.admin')
@section('title',$title)
@section('content')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header"  style="height: 50px;">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form action="/admin/category" method='post' class="mws-form" enctype='multipart/form-data'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">分类名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='gname'>
    				</div>
    			</div>
    			
    			<div class="mws-form-row">
    				<label class="mws-form-label">父级分类</label>
    				<div class="mws-form-item">
    					<select class="small" name='pid'>
    						<option value='0'>顶级分类</option>
    				    @foreach($rs as $k => $v)
    						<option value='{{$v->gid}}'>{{$v->gname}}</option>
                        @endforeach
						
    						
    					</select>
    				</div>
    			</div>
                
                
                <div class="mws-form-row">
                  <label class="mws-form-label">图标</label>
                  <div class="mws-form-item">
                      <div style="position: relative;" class="fileinput-holder"><input type="file" name='img' style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></div>
                    </div>
                </div>
                
               
    			
    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" class="btn btn-info" value="添加">
    			
    		</div>
    	</form>
    </div>    	
</div>
@stop