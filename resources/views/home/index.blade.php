@extends('common.home')

@section('content')
<style type="text/css" media="screen">00
	#imgs{
		width: 200px;
		height: 100px;
	}
</style>

<!-- 广告 -->

		@foreach($ad as $k =>$v)
	
		<div class='adv' style="background:url({{$v->url}}) no-repeat center top #7B010B;">
			<a href='http://www.adv.com/' target='_blank' class='link'></a>
	
		@endforeach		
		<a href='javascript:;' class='up'></a>
	</div>
	
<!-- 前台轮播图 -->
<!-- banner-text -->
	<div class="banner-text">
		<div class="wmuSlider example1">
		   <div class="wmuSliderWrapper">
		   		@foreach ($slideShows as $k=>$v)
				<article style="position: absolute; width: 100%; opacity: 0;"> 
					<div class="banner-wrap">
						<div class="banner-text-info banner-text-inf" style="background:url({{$v['url']}}); width: 100%; height: 20%; background-size: 100% ;">
							<h3 >{{$v['title']}}</h3>
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
<!-- //banner-text -->

@foreach($gname as $k=>$v)

<div id="BBS" class="services">
		<div class="container">
			<h3 class="ser">
				{{$v->gname}}
			</h3>
		<p class="ever"> </p>
			<!-- 论坛帖子入口 -->
		
		@foreach($category as $kk=>$vv)
		@if($vv->pid == $v->gid)
			<div class="services-top" ">
				<div class="col-md-6 services-top-left" style="float: left; width: 30%; margin-top: 10px; margin-bottom:10px; ">
					<div class="services-top-main">
						
						<div class="col-md-6 services-left service-img" style="width: 30%;">
							<a href="/home/post" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
								<img src="{{$vv->url}}" alt="" class="img-responsive" />
							</a>
						</div>
						<div class="col-md-6 services-left">

							<a href="/home/post/{{$vv->gid}}" title=""><h4>{{$vv->gname}}</h4></a>

						</div>
						
					</div>
				</div>
				
			</div>
			@endif
			@endforeach
			<div class="clearfix"></div>
			
		</div>
	</div>


@endforeach
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