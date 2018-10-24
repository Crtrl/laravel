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
        <form id="mws-validate" class="mws-form" action="/admin/permission" novalidate="novalidate" method="post">
        	{{csrf_field()}}
            <div id="mws-validate-error" class="mws-form-message error" style="display:none;">
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        权限名
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="pername" class="required small">
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">
                        权限
                        <span class="required">*</span>
                    </label>
                    <div class="mws-form-item">
                        <input type="text" name="permission" class="required small">
                        <p>请严格按照形式填写,例:AdminUsersController@index</p>
                    </div>
                </div>

            	<div class="mws-button-row">
                	<input type="submit" class="btn btn-success">
            	</div>
            </div>
        </form>
    </div>

@stop