@extends('common.admin')


@section('content')
 <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 审核配置</ul>
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">审核配置</a></dl>
    </div>
    <div class="fbneirong">
      <form class="am-form" action="/sys/upshen" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="am-form-group am-cf">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div class="zuo"><strong>注意:</strong></div>
          <p>&nbsp;</p>
          <div class="you"><span style="color:red">*****输入禁止的关键词以英文','隔开****</span></div>
        </div>
		    <div class="am-form-group am-cf">
          <div class="zuo">禁用关键词</div>
         
          <div class="you">

            <textarea class="" rows="8" id="doc-ta-1" name="content">{{$skeywords}}</textarea>
          </div>
          
        </div>
         <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="submit" class="am-btn am-btn-success am-radius" >确认内容</button>
          </div>
        </div>
      </form>
    </div>	
@stop