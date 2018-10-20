@extends('common.admin')


@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-ok">
            </i>
            后台用户修改
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form id="mws-validate" class="mws-form" action="/admin/users/{{$rs->id}}" novalidate="novalidate" method="post">
        	{{csrf_field()}}
            {{method_field('PUT')}}
            <div id="mws-validate-error" class="mws-form-message error" style="display:none;">
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        用户名
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="username" class="required large" value="{{$rs->username}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        电子邮箱
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="email" class="required digits large" value="{{$rs->email}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
				    <label class="mws-form-label">
				        权限
				    </label>
				    <div class="mws-form-item clearfix">
				        <ul class="mws-form-list inline">
				            <li>
				                <input type="checkbox" name="auth[]" disabled="true" value="1" @if(in_array(1,$rs->auth)) checked @endif>
				                <label>
				                    超级管理员
				                </label>
				            </li>
				            <li>
				                <input type="checkbox" name="auth[]" disabled="true" value="2" @if(in_array(2,$rs->auth)) checked @endif>
				                <label>
				                    普通管理员
				                </label>
				            </li>
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