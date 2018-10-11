@extends('common.admin')


@section('content')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery带节假日农历日历</title>
</head>

<body>

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

<div class="membder-background addMemo-body" style="width:1000px">
  <div class="addMemo" id="iframe">

    <div class="clear-both"></div>
    <iframe src="/iframe.html" width="100%" height="600" id="iframepage" name="iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>    
  </div>    
</div>

<script type="text/javascript">
$(document).ready(function(){
  var iframe=$("#iframepage").show();
  $("#J-xl").click(function(){
    iframe.fadeIn();
  });
});
</script>

<div style="width:1000px; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. 不支持IE8及以下浏览器。</p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
</body>
</html>


@stop