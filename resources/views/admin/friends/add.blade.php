@extends('common.admin')

@section('content')

<style type="text/css">
        .zuo{
            margin-left: 100px;
            padding-top: 0px;
        }
        #aa{
          margin-left: 200px;
        }
</style>
    <div class="listbiaoti am-cf">
      <ul class="am-icon-users"> 新建链接</ul>
      
     
      
      
      <!--这里打开的是新页面-->

    </div >

<form action='/admin/friends' method="post"   enctype="multipart/form-data">
{{ csrf_field() }}
  <div class="fbneirong">
      <form class="am-form" action="/friend/save" method="post" enctype="multipart/form-data">
        <div class="am-form-group am-cf">
          <div class="zuo">标题：</div>
          <div class="you">
            <input type="text" name="fname" class="am-input-sm" name='fname'  id="doc-ipt-name-1" placeholder="请输入标题">
          </div>
        </div>
            <div class="am-form-group am-cf">
          <div class="zuo">链接地址:</div>
          <div class="you">
            <input type="text" name="flink" class="am-input-sm" id="doc-ipt-pwd-1"  placeholder="请输入一个有效的链接地址">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">描 述：</div>
          <div class="you">
            <textarea class="" style="height:100px;resize:none;" rows="2" id="doc-ta-1" name="descript"></textarea>
          </div>
        </div>
    
        <div class="am-form-group am-cf">
          <div class="zuo" >头像图：</div>
          <div class="you"><input name="fpic"  type="file"   id="doc-ipt-file-1"> </div>
        </div>
        
       <!--  <div class="am-form-group am-cf">
          <div class="zuo">内容：</div>
          <div class="you">
            <textarea class="" rows="2" id="doc-ta-1"></textarea>
          </div>
        </div> -->
        
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
             ;<button type="submit" class="am-btn am-btn-secondary am-radius col-md-offset-5">提交</button>
          </div>
        </div>
      </form>
    </div>

    @stop