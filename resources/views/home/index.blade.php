@extends('common.home')

@section('content')

<!-- 广告 -->
	<div class='adv' style="background:url(http://demo.lanrenzhijia.com/2015/slide0311/images/big.jpg) no-repeat center top #7B010B;">
		<a href='http://www.adv.com/' target='_blank' class='link'></a>
		<a href='javascript:;' class='up'></a>
	</div>

<!-- 前台轮播图 -->
<!-- banner-text -->
	<div class="banner-text">
		<div class="container">
			<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			   		@foreach ($slideShows as $k=>$v)
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf" style="background:url({{$v['url']}}) no-repeat 0px 0px;">
								<h3>{{$v['title']}}</h3>
							</div>
						</div>
					</article>
					@endforeach
				</div>
			</div>
				<script src="js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
		</div>
	</div>
<!-- //banner-text -->


<!-- 网络游戏 -->
<!-- services -->
	<div id="netGame" class="services">
		<div class="container">
			<h3 class="ser">网络游戏</h3>
		<p class="ever">Games are ninth kinds of art. </p>
			<!-- 论坛帖子入口 -->
			<div class="services-top">
				<div class="col-md-6 services-top-left">
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img" style="width: 30%;">
							<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/55.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 services-left">
							<h4>英雄联盟</h4>
							<p>S8,RISE!<br>大声告诉世界我们是LPL!</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
				<!--swipebox -->	
				<link rel="stylesheet" href="/home/css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!--//swipebox Ends -->
		</div>
	</div>
<!-- 	<div class="services1"></div> -->
<!-- //services -->

<!-- 手机游戏 -->
<!-- services -->
	<div id="mobileGame" class="services">
		<div class="container">
			<h3 class="ser">手机游戏</h3>
		<p class="ever">随时随地享受乐趣. </p>
			<!-- 论坛帖子入口 -->
			<div class="services-top">
				<div class="col-md-6 services-top-left">
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img" style="width: 30%;">
							<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/55.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 services-left">
							<h4>王者荣耀</h4>
							<p>-破魔之箭-伽罗-<br>"羌笛何须怨杨柳,春风不度玉门关".</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- 	<div class="services1"></div> -->

<!-- 单机游戏 -->
<!-- services -->
	<div id="idpGame" class="services">
		<div class="container">
			<h3 class="ser">单机游戏</h3>
		<p class="ever">十一过了,该收拾一下准备过年放假了. </p>
			<!-- 论坛帖子入口 -->
			<div class="services-top">
				<div class="col-md-6 services-top-left">
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img" style="width: 30%;">
							<a href="images/55.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/55.jpg" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 services-left">
							<h4>无双大蛇3</h4>
							<p>蛇魔远吕智,再临!</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- 	<div class="services1"></div> -->
<!-- //services -->

<!-- 友情链接 -->
<!-- gallery -->
	<div id="friends" class="gallery">
		<div class="container">
		<h3>友情链接</h3>
		<p class="ever">发现更大的世界.</p>
			<div class="gallery-grids">
				<section>
					<ul id="da-thumbs" class="da-thumbs">
						<li style="width: 20%;">
							<a href="images/5.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/5.jpg" alt="" />
								<div>
									<h5>Elite Bakery</h5>
									<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
								</div>
							</a>
						</li>

						
					</ul>
				</section>
				<script type="text/javascript" src="/home/js/jquery.hoverdir.js"></script>	
				<script type="text/javascript">
					$(function() {
					
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

					});
				</script>
			</div>
		</div>
	</div>
<!-- //gallery -->
@stop