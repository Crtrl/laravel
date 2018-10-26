<!DOCTYPE html>
<html>
<head>
@foreach($zx as $k=>$v)
<title  >{{$v->sname}}</title>
@endforeach
<!-- for-mobile-apps -->
<script src="/ueditor/ueditor.config.js"></script>
<script src="/ueditor/ueditor.all.min.js"></script>
<script src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/home/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="/home/js/jquery-1.11.1.min.js"></script>

<!--bootstrap-->
     <link type="text/css" rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="/admin/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/admin/bootstrap/js/jquery-1.8.3.js"></script>

<!-- //js -->
<!-- for-gallery-rotation -->
<script src="/home/js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="/home/css/flexslider.css" type="text/css" media="screen" />
<script defer src="/home/js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/home/js/move-top.js"></script>
<script type="text/javascript" src="/home/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- 下拉广告 -->
<style>
*{ margin:0; padding:0; list-style:none;}
.adv{ width:100%; height:250px; margin:0 auto; overflow:hidden; display:none; text-align:center; position:relative;}
.adv .link{ width:100%; height:250px; display:block; z-index:10;}
.adv .up{ display:block; width:120px; height:12px; background:url(/home/images/arrow.jpg) no-repeat left bottom; position:absolute; left:50%; bottom:0; z-index:20; margin-left:-60px;}
.adv .down{ display:block; width:120px; height:12px; background:url(/home/images/arrow.jpg) no-repeat left top; position:absolute; left:50%; top:88px; z-index:20; margin-left:-60px;}


#img{
	height: 100px;
}
</style>

<script>
	$(function(){

		//将内容插入到header下方，页面加载完毕后自动展开		
		$('.adv').slideDown(1500);	
		//设置延时函数
		function adsUp(){
			$('.adv').animate({
				height:'100px'						 
			},1000,function(){
				$(this).find('.up').addClass('down').removeClass('up');	
			});	
		}
		//五秒钟后自动收起
		var t = setTimeout(adsUp,5000);
		//点击收起
		$('.adv a.up').on('click',function(){
			clearTimeout(t);
			$('.adv').animate({
				height:'100px'						 
			},function(){
				$(this).find('.up').addClass('down').removeClass('up');	
			});	 
		});	
		
		//点击下拉
		$('.adv').on('click','.down',function () {
			$(this).css({
				opacity:'0'	,
				filter:'alpha(opacity=0)'
			});
			$('.adv').animate({
				height:'250px'
			},function(){
				$(this).find('.down').addClass('up').removeClass('down').css({opacity:'1',filter:'alpha(opacity=100)'});
			});	 
		});

	});
</script>
<!-- 广告结束 -->
        <div class="container">
        
                <div class="form-group">

                @if(session('success'))  
                    <div class="mws-form-message success">
                        {{session('success')}}  
                    </div>
                @endif

                @if(session('error'))  
                    <div class="mws-form-message warning">
                        {{session('error')}} 
                    </div>
                @endif
                </div>

</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  @foreach($zx as $k=>$v)
						<div class="logo">
							<img src="{{$v->slogo}}"  id='img' alt="">
						</div>
					 @endforeach
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="hvr-sweep-to-bottom active"><a href="/home/index">首页</a></li>	
							
							<li class="hvr-sweep-to-bottom"><a href="#BBS" class="scroll">论坛入口</a></li>
							
							<li class="hvr-sweep-to-bottom"><a href="#friends" class="scroll">友情链接</a></li>



						@php
                    		$res = DB::table('front_users')->where('fid',session('fid'))->first();
               			@endphp
               			@if($res)
               		
               			 <li class="hvr-sweep-to-bottom">

								<a href="/home/user/profile" style="padding: 0px;">
								<img src="{{$res->face}}"  width="83" alt="" style="margin: 0px;" />
								</a>		
							</li>
						
							<li class="">
								<div  style='color:gold'>Hello, {{$res->fname}}</div>
								<div><a href="/home/user/profile" class="btn btn-warning btn-default" style='color:blue'>个人中心</a></div>
								<div><a href="/home/loginout" class="btn btn-warning btn-default" style="width: 100%">退出</a></div>
							</li>

						@else
							<li class="hvr-sweep-to-bottom"><a href="/home/login" >登陆/注册</a></li>
						@endif		

						</ul>
					</div><!-- /.navbar-collapse -->					
				</nav>			
			</div>
		</div>		
	</div>
<!-- //header -->
@section('content')


@show
<!-- 底部 -->
<!-- footer -->

	<div class="copy">
		<div class="container">
			<div class="copy-left-w3l-agile">
				<p>Copyright &copy; 2018.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="www.facebook.com" class="fb"></a></li>
					<li><a href="www.twitter.com"></a></li>
					<li><a href="www.google.com" class="gg"></a></li>
					<li><a href="t.qq.com" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--//footer-->
<!-- for bootstrap working -->
		<script src="/home/js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>