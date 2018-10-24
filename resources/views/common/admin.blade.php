<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

   <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="/admin/css/site.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="icon" type="image/png" href="/admin/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/dist/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/admin/css/amazeui.min.css"/>
<link rel="stylesheet" href="/admin/css/admin.css">
<script src="/admin/js/jquery.min.js"></script>
<!-- <script src="/admin/js/app.js"></script> -->
    <script type="text/javascript" src="/admin/js/site.min.js"></script>

    <link type="text/css" rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="/admin/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/admin/bootstrap/js/jquery-1.8.3.js"></script>


<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admin/css/themer.css" media="screen">

<style>
    body, 
    #mws-container
    {
        background-image:url('/admin/images/core/bg/diagonal_striped_brick.png');
    }

    #mws-sidebar, 
    #mws-sidebar-bg, 
    #mws-header, 
    .mws-panel .mws-panel-header, 
    #mws-login, 
    #mws-login .mws-login-lock, 
    .ui-accordion .ui-accordion-header, 
    .ui-tabs .ui-tabs-nav, 
    .ui-datepicker, 
    .fc-event-skin, 
    .ui-dialog .ui-dialog-titlebar, 
    .jGrowl .jGrowl-notification, .jGrowl .jGrowl-closer, 
    #mws-user-tools .mws-dropdown-menu .mws-dropdown-box, 
    #mws-user-tools .mws-dropdown-menu.open .mws-dropdown-trigger
    {
        background-color:#2f2f33;
    }

    #mws-header
    {
        border-color:#808080;
    }

    .mws-panel .mws-panel-header span, 
    #mws-navigation ul li.active a, 
    #mws-navigation ul li.active span, 
    #mws-user-tools #mws-username, 
    #mws-navigation ul li .mws-nav-tooltip, 
    #mws-user-tools #mws-user-info #mws-user-functions #mws-username, 
    .ui-dialog .ui-dialog-title, 
    .ui-state-default, 
    .ui-state-active, 
    .ui-state-hover, 
    .ui-state-focus, 
    .ui-state-default a, 
    .ui-state-active a, 
    .ui-state-hover a, 
    .ui-state-focus a
    {
        color:#b0e6ff;
        text-shadow:0 0 6px rgba(230, 232, 208, 0.4);
    }

    #mws-searchbox .mws-search-submit, 
    .mws-panel .mws-panel-header .mws-collapse-button span, 
    .dataTables_wrapper .dataTables_paginate .paginate_disabled_previous, 
    .dataTables_wrapper .dataTables_paginate .paginate_enabled_previous, 
    .dataTables_wrapper .dataTables_paginate .paginate_disabled_next, 
    .dataTables_wrapper .dataTables_paginate .paginate_enabled_next, 
    .dataTables_wrapper .dataTables_paginate .paginate_active, 
    .mws-table tbody tr.odd:hover td, 
    .mws-table tbody tr.even:hover td, 
    .ui-slider-horizontal .ui-slider-range, 
    .ui-slider-vertical .ui-slider-range, 
    .ui-progressbar .ui-progressbar-value, 
    .ui-datepicker td.ui-datepicker-current-day, 
    .ui-datepicker .ui-datepicker-prev, 
    .ui-datepicker .ui-datepicker-next, 
    .ui-accordion-header .ui-accordion-header-icon, 
    .ui-dialog-titlebar-close
    {
        background-color:#808080;
    }


</style>

<title>StarySky</title>

</head>

<body>



  <!-- Header -->
  <div id="mws-header" class="clearfix">
    
      <!-- Logo Container -->
    <div id="mws-logo-container">
        
          <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap">

            <h3 style='color:white'><a href="/home/index">星空论坛</a></h3>   

        </div>
    </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
                   
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
              <!-- User Photo -->
              <div id="mws-user-photo">
                  <img src="/admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        {{Session::get('user')['username']}}
                    </div>
                    <ul>
                        <li><a href="/admin/reset">修改密码</a></li>
                        <li><a href="/admin/logout">登出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
      <!-- Necessary markup, do not remove -->
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
                       
            <!-- Main Navigation -->

            <!-- 分类管理 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 后台用户管理</a>
                        <ul class="closed">
                            <li><a href="/admin/users">浏览用户</a></li>
                            <li><a href="/admin/users/create">添加用户</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 角色管理 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 角色管理</a>
                        <ul class="closed">
                            <li><a href="/admin/role">浏览角色</a></li>
                            <li><a href="/admin/role/create">添加角色</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- 权限管理 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 权限管理</a>
                        <ul class="closed">
                            <li><a href="/admin/permission">浏览权限</a></li>
                            <li><a href="/admin/permission/create">添加权限</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

             <!-- 分类管理 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/admin/category/create">添加分类</a></li>
                            <li><a href="/admin/category">浏览分类</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
   
            <!-- 轮播图 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/admin/slideshows">图片总览</a></li>
                            <li><a href="/admin/slideshows/create">添加图片</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- 广告 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-bullhorn"></i> 广告管理</a>
                        <ul class="closed">
                            <li><a href="/admin/ad/create">添加广告</a></li>
                            <li><a href="/admin/ad">浏览广告</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>   
 

            <!-- 系统设置 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 系统设置</a>
                        <ul class="closed">
                            <li><a href="/admin/sys/web">网站配置</a></li>
                            <li><a href="/admin/sys/aud">审核配置</a></li>
                        
                        </ul>
                    </li>
                </ul>
            </div>  

             <!-- 帖子列表 -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i>帖子列表</a>
                        <ul class="closed">
                            <li><a href="/admin/post/index">主贴内容</a></li>
                      
                        </ul>
                    </li>
                </ul>
            </div>  



            <!-- 友情链接-->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-list"></i> 友情链接管理</a>
                        <ul class="closed">


                            <li><a href="/admin/friends">浏览链接</a></li>
                            <li><a href="/admin/friends/create">新建链接</a></li>

                        </ul>
                    </li>
                </ul>
            </div>   
        </div>

        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
          <!-- Inner Container Start -->
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
            
            @section('content')
            
            @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->

         
          

            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admin/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admin/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admin/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admin/jui/jquery-ui.custom.min.js"></script>
    <script src="/admin/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <!-- <script src="/admin/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admin/plugins/flot/plugins/jquery.flot.resize.min.js"></script> -->
    <script src="/admin/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admin/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admin/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admin/js/demo/demo.dashboard.js"></script>
    @section('js')

    @show
    <script>
        $(function () {
            $('.mws-form-message').delay(3000).slideUp(1000);
        })
    </script>
</body>
</html>