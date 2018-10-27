@extends('common.admin')


@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-ok">
            </i>
            角色创建
        </span>
    </div>
    @if (count($errors))
    <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mws-panel-body no-padding">
        <form id="mws-validate" class="mws-form" action="/admin/role/{{$role->id}}" novalidate="novalidate" method="post">
        	{{csrf_field()}}
            {{method_field('PUT')}}
            <div id="mws-validate-error" class="mws-form-message error" style="display:none;">
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        角色名
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="rolename" class="required small" value="{{$role->rolename}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
				    <label class="mws-form-label">
				        权限
				    </label>
				    <div class="mws-form-item clearfix">
				        <ul class="mws-form-list inline">
                        @foreach ($per as $k=>$v)
				            <li>
                                <label>                            
				                <input type="checkbox" name="permission[]" value="{{$v->id}}" @if(in_array(($v->id),$role->permission))checked @endif>
			                    {{$v->pername}}
				                </label>
				            </li>
                        @endforeach
				        </ul>
				    </div>
				</div>
            	<div class="mws-button-row">
                	<input type="submit" class="btn btn-success">
            	</div>
        </form>
    </div>
</div>
@stop