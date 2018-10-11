<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
		.aa{
			text-decoration:none;
		}
	</style>

    <script type="text/javascript" src="/admin/js/site.min.js"></script>

       <link type="text/css" rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="/admin/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/admin/bootstrap/js/jquery-1.8.3.js"></script>


</head>
<body>


		 <hr>
	<h4><a href="/home/user/profile" title="">个人用户</a></h4>
  	@foreach($rs as $k=> $v)
  	<ul>
  		<h5><li style='list-style:none'>你好,{{$v->fname}}</li></h5>
  	</ul>
      <img src="{{$v->face}}" width="100"alt="">
	@endforeach

	
      
</body>
</html>










 