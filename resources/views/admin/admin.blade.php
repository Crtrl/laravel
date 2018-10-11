@extends('common.admin')


@section('content')



<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>

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

</div>



@stop