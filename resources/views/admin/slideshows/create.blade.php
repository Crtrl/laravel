@extends('common.admin')


@section('content')
<!-- 轮播图添加 -->
<div class="mws-panel grid_6 grid-off-4">
<div class="mws-panel-header">
	<span><i class="icon-picture"></i> 轮播图添加</span>
</div>
<div class="mws-panel-body no-padding">
	<form class="mws-form" action="/admin/slideshows" method="post" enctype="multipart/form-data" id="form_upload">
		{{csrf_field()}}
    	<div class="mws-form-block">
            <div class="mws-form-row">
                <label class="mws-form-label"><p>图片预览</p></label>
                <div id="mws-crop-parent" class="mws-form-item" style="height: 600px;overflow: hidden;">
                    <img  alt="" id="prev">
                </div>
			</div>
            <div class="mws-form-row">
                <div class="mws-form-item">
                	<label><p>标题</p><span class="required">*</span></label>
                    <input type="text" name="title" class="small">
                </div>
            </div>
            <div class="mws-form-row">
                <div class="mws-form-cols">
                	<label>选择图片
                    <span class="required">*</span>
                    <input type="file" name="file_upload" id="file_upload">
                	</label>
                </div>
            </div>
        </div>
        <div class="mws-button-row">
        	<input type="submit" value="提交" class="btn btn-success">
        </div>
    </form>
</div>
</div>
@stop
@section('js')

<!-- 图片预览功能 -->
<script>
    $(function() {
            $("#file_upload").change(function() {
                 var imgPath = $("#file_upload").val();
                if (imgPath == "") {
                    alert("请选择上传图片！");
                    return;
                }
                //判断上传文件的后缀名
                var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                if (strExtension != 'jpg' && strExtension != 'gif'
                    && strExtension != 'png' && strExtension != 'bmp') {
                    alert("请选择图片文件");
                    return;
                }
                var $file = $(this);
                var objUrl = $file[0].files[0];
                //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome  
                var windowURL = window.URL || window.webkitURL;
                //createObjectURL创建一个指向该参数对象(图片)的URL  
                var dataURL = windowURL.createObjectURL(objUrl);
                $("#prev").attr("src", dataURL);
            });
        });
</script>
@stop