@extends('common.admin')


@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-ok">
            </i>
            后台用户创建
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
        <form id="mws-validate" class="mws-form" action="/admin/users" novalidate="novalidate" method="post">
        	{{csrf_field()}}
            <div id="mws-validate-error" class="mws-form-message error" style="display:none;">
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        用户名
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="username" class="required small"><p> 用户名不能为空,长度应在3-5之间</p>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        密码
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="password" class="required email small"><p> 密码不能为空,长度应在3-5之间</p>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        确认密码
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="password_confirmation" class="required url small"><p> 请再次输入密码</p>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        电子邮箱
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="email" class="required digits small"><p> 请输入有效的邮箱</p>
                    </div>
                </div>
                <div class="mws-form-row bordered">
				    <label class="mws-form-label">
				        角色
				    </label>
				    <div class="mws-form-item clearfix">
				        <ul class="mws-form-list inline">
                            @foreach($role as $k=>$v)
				            <li>
				                <input type="checkbox" name="role[]" value="{{$v->id}}">
				                <label>
				                    {{$v->rolename}}
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