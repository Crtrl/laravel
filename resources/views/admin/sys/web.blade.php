@extends('common.admin')


@section('content')
	   <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 网站配置</ul>
      <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="#">网站配置</a></dl>
    </div>
	<div class="fbneirong">
      <form class="am-form" action="/sys/web" method="post" enctype="multipart/form-data">
        <div class="am-form-group am-cf">
          <div class="zuo">网站标题：</div>
          <div class="you">
            <input type="text" class="am-input-sm" id="doc-ipt-text-1" name="sname"  value="" placeholder="请输入网站标题">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">网站关键词：</div>
          <div class="you">
            <input type="text" class="am-input-sm" id="doc-ipt-text-1" name="skeywords" value="" placeholder="请输入网站关键词">
          </div>
        </div>
        
        <div class="am-form-group am-cf">
          <div class="zuo">网站开关：</div>
          <div class="you">
            <input type="radio" class="am-input-sm" id="doc-ipt-radio-1" name="sstatus" value="1"> on
            <input type="radio" class="am-input-sm" id="doc-ipt-radio-1" name="sstatus" value="0" > off
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">网站版权：</div>
          <div class="you">
            <input type="text" class="am-input-sm" id="doc-ipt-text-1" name="scopyarght" value="" placeholder="请输入网站的版权">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">网站描述：</div>
          <div class="you">
            <textarea class="" rows="2" id="doc-ta-1" name="sdescript"></textarea>
          </div>
        </div>
        
        <div class="am-form-group am-cf">
          <div class="zuo">LOGO：</div>
          <div class="you">
          	<img width="250" height="80" src="">
            <input type="file" id="doc-ipt-file-1" name="slogo">
            <p class="am-form-help">请选择要上传的文件...</p>
          </div>
          <div class="clearfix"></div>
        </div>
       
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
            <button type="submit" class="am-btn am-btn-success am-radius ">提交保存</button>
    		<button type="reset" class="am-btn am-btn-primary am-radius ">放弃保存</button>

          </div>
        </div>
      </form>
    </div>


@stop