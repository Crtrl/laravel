<!doctype html>
<html lang="zh" data-hairline="true" data-theme="light">
    
    <head>
        <meta charset="utf-8" />
        <title data-react-helmet="true">
            星空
        </title>
     <link href="/css/login.css" rel="stylesheet" />
     <style type="text/css">
     	.SignFlowHeader-slogen {
								    
								    color: #02a2aa;
								    
								}
        .SignFlowHomepage{
            background-image:url("/images/background/ChMkJldLxJ2IUJTeAATEABtMuDMAASC2QDdwugABMQY859.jpg");
                        }
     </style>
       
    </head>
    
    <body class="EntrySign-body">
       
        <div id="root">
            <div data-zop-usertoken="{}" data-reactroot="">
                <div class="LoadingBar">
                </div>
               
                <main role="main" class="App-main">
                    <div class="SignFlowHomepage">
                        <div class="SignFlowHomepage-content">
                            <div class="Card SignContainer-content">
                                <div class="SignFlowHeader" style="padding-bottom:5px">
                                  
                                     <div class="SignFlowHeader-slogen" style="font-size: 50px; ">
                                        星空论坛
                                     </div>
                                   
                                    <div class="SignFlowHeader-slogen">
                                        不一样的星空，不一样的论坛
                                     </div>
                                </div>
                                <div class="SignContainer-inner">
                                    <div class="Register">
                                        <div>
                                            <div class="Register-content">
                                                <form action="/home/dologin" method="post">


                                                    
                                                    <div class="SignFlow-account">
                                                       
                                                        <div class="SignFlowInput SignFlow-accountInputContainer">
                                                            <div class="SignFlow-accountInput Input-wrapper">
                                                                <input type="tel" value="" name="fname" class="Input" placeholder="用户名"
                                                                />
                                                            </div>
                                                            
                                                        </div>
                                                    </div>




                                                    <div class="SignFlow-account">
                                                        
                                                        <div class="SignFlowInput SignFlow-accountInputContainer">
                                                            <div class="SignFlow-accountInput Input-wrapper">

                                                                <input type="password" value="" name="password" class="Input" placeholder="密码"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>


                                                   




                                                    <div class="Captcha SignFlow-captchaContainer Register-captcha" style="width:0;height:0;opacity:0;overflow:hidden;margin:0;padding:0;border:0">
                                                    <!--     <div>
                                                            <div class="Captcha-chineseOperator">
                                                                <span class="Captcha-info">
                                                                    请点击图中倒立的文字
                                                                </span>
                                                                <button type="button" class="Button Captcha-chineseRefreshButton Button--plain">
                                                                    <svg class="Zi Zi--Refresh" fill="currentColor" viewBox="0 0 24 24" width="20"
                                                                    height="20">
                                                                        <path d="M20 12.878C20 17.358 16.411 21 12 21s-8-3.643-8-8.122c0-4.044 3.032-7.51 6.954-8.038.034-1.185.012-1.049.012-1.049-.013-.728.461-1.003 1.057-.615l3.311 2.158c.598.39.596 1.026 0 1.418l-3.31 2.181c-.598.393-1.08.12-1.079-.606 0 0 .006-.606-.003-1.157-2.689.51-4.675 2.9-4.675 5.708 0 3.21 2.572 5.822 5.733 5.822 3.163 0 5.733-2.612 5.733-5.822 0-.633.51-1.148 1.134-1.148.625 0 1.133.515 1.133 1.148"
                                                                        fill-rule="evenodd">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="Captcha-chineseContainer">
                                                                <img data-tooltip="看不清楚？换一张" class="Captcha-chineseImg" src="data:image/jpg;base64,null"
                                                                alt="图形验证码" />
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                <!--     <div class="Register-SMSInput">
                                                        <div class="SignFlow SignFlow-smsInputContainer">
                                                            <div class="SignFlowInput SignFlow-smsInput">
                                                                <div class="Input-wrapper">
                                                                    <input type="number" value="" name="digits" class="Input" placeholder="输入 6 位短信验证码"
                                                                    />
                                                                </div>
                                                                <div class="SignFlowInput-errorMask SignFlowInput-requiredErrorMask SignFlowInput-errorMask--hidden">
                                                                </div>
                                                            </div>
                                                            <button type="button" class="Button CountingDownButton SignFlow-smsInputButton Button--plain">
                                                                1获取短信验证码
                                                            </button>
                                                        </div>
                                                      
                                                    </div> -->
                                                    {{csrf_field()}}
                                                    <button type="submit" class="Button Register-submitButton Button--primary Button--blue">
                                                       登录
                                                    </button>
                                                </form>
                                                <div class="Register-footer">
                                                    <span class="Register-declaration" >
                                                      <!-- <a href="http://www.baidu.com">QQ账号登录</a>  -->
                                                    </span>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SignContainer-switch">
                                        没有帐号？
                                        <span>
                                            <a href="/home/register">去注册</a>
                                        </span>
                                    </div>
                                    <div class="SignFlowHomepage-qrImage SignFlowHomepage-qrImageHidden">
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <footer class="SignFlowHomepage-footer">
                           
                            <div class="ZhihuRights">
                                <a target="_blank" rel="noopener noreferrer" href="#">
                                    关于星空
                                </a>
                                
                               <a target="_blank" rel="noopener noreferrer" href="#">
                                    广告服务
                                </a>
                                 <a target="_blank" rel="noopener noreferrer" href="#">
                                    技术支持
                                </a>
                              
                            </div>
                            <div class="ZhihuReports">
                                <a target="_blank" rel="noopener noreferrer" href="#">
                                    侵权举报
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="#">
                                    网上有害信息举报专区
                                </a>
                                <a target="_blank" rel="noopener noreferrer" href="#">
                                    儿童色情信息举报专区
                                </a>
                                <span>
                                    违法和不良信息举报：010-82716601
                                </span>
                            </div>
                            <div class="ZhihuIntegrity">
                                <div>
                                   
                                    <a href="">
                                        星空社区-诚信网站
                                    </a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </main>
            </div>
        </div>
        
        
        
    </body>

</html>