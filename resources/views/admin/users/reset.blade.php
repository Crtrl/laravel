@extends('common.admin')


@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-ok">
            </i>
            重置密码
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form id="mws-validate" class="mws-form" action="/admin/doreset/{{$id}}" novalidate="novalidate" method="post">
        	{{csrf_field()}}
            <div id="mws-validate-error" class="mws-form-message error" style="display:none;">
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        新密码
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="pwd" class="required digits small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">
                        再次输入新密码
                    </label>
                    <div class="mws-form-item">
                        <input type="password" name="repwd" class="required digits small">
                    </div>
                </div>
            	<div class="mws-button-row">
                	<input type="submit" class="btn btn-success">
            	</div>
        </form>
    </div>
</div>
@stop

@section('js')
<!-- 验证两次密码是否一致 -->
<script>
    $('#mws-validate').submit(function () {
        if($(':input[name=pwd]').val() != $(':input[name=repwd]').val()){
            alert('两次密码不一致');
            return false;
        }
    });

</script>
@stop