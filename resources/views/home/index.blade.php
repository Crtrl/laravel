@extends('common.home')

@section('content')


<style type="text/css" media="screen">
	#imgs{
		width: 200px;
		height: 100px;
	}
</style>
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
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf">
								<h3>Treat yourself with a sweet, freshly baked goodie</h3>
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf1">
								<h3>Everyone knows, that treating yourself with tasty</h3>
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf2">
								<h3>Treat yourself with a sweet, freshly baked goodie</h3>
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf3">
								<h3>Enjoy our tasty array of bakery products!</h3>
							</div>
						</div>
					</article>
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
			@foreach($res as $k=> $v)
				<section>
					<ul id="da-thumbs" class="da-thumbs">
						<li style="width: 20%;">
							<a href="{{$v->flink}}"   title="{{$v->descript}}">
								<img src="{{$v->fpic}}" alt="" id='imgs' />
								
							</a>
						</li>

						
					</ul>
				</section>
				@endforeach
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