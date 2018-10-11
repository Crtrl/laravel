   @extends('common.admin')


@section('content')
    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 禁用IP</ul>
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">禁用IP</a></dl>
    </div>
    <div class="fbneirong">
      <form class="am-form" action="/sys/doJin/" method="post" enctype="multipart/form-data">
        
        <div class="am-form-group am-cf">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div class="zuo"><strong>禁用IP:</strong></div>
          <p>&nbsp;</p>
          <div class="you"><span style="color:red">*****请选择所禁用的ip,禁用后改用户不能够发帖****</span></div>
        </div>
		    <div class="am-form-group am-cf">
          <div class="zuo">禁用IP</div>
          <div class="you">
            <ul>
              {foreach $jin as $v}
              <li style="list-style:none;height:30px;border-bottom:1px dashed #888"><input  type="checkbox" name="rip" value="{$v.rip}" {if in_array($v.rip,$ips)}{/if}>  {:long2ip($v.rip)}</li>
              {/foreach}
            </ul>
              
              
              
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