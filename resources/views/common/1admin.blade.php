<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <style type="text/css" media="screen">
        body{background:#f2f2f2 url(1.jpg)}
        #navbar .list-group{
          height: 800px;
          margin-bottom: 0;
        }
    </style>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link rel="stylesheet" href="/dist/css/site.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    

   
    <script type="text/javascript" src="/dist/js/site.min.js"></script>
  </head>
  <body>

    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom" style="margin-bottom: 0px;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">后台管理系统</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
         
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse" >
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/admin/login">登录</a></li>
               <li class="active"><a href="getting-started.html">前台首页</a></li>
            </ul>
            
          </div>
        </div>
      </nav>
    <!--header-->


    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="navbar" role="navigation"style="width:300px;">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
              
           
                  <a href="#demo3" class="list-group-item " data-toggle="collapse">用户管理  <span class="glyphicon glyphicon-chevron-right"></span></a>
                  <div class="collapse" id="demo3">
                
                    <div class="collapse list-group-submenu" id="SubMenu1">
                      <!-- <a href="#" class="list-group-item">Subitem 1 a</a> -->
                      <!-- <a href="#" class="list-group-item">Subitem 2 b</a> -->
                      <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse">用户管理 <span class="glyphicon glyphicon-chevron-right"></span></a>
                      <!-- <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1"> -->
                        <!-- <a href="#" class="list-group-item">Sub sub item 1</a> -->
                        <!-- <a href="#" class="list-group-item">Sub sub item 2</a> -->
                      <!-- </div> -->
                     <!--  <a href="#" class="list-group-item">Subitem 4 d</a> -->
                    </div>
                    <a href="javascript:;" class="list-group-item">添加用户</a>
                    <a href="javascript:;" class="list-group-item">管理用户</a>
                  </div>
                </li>
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse">广告管理  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="/admin/ad/create" class="list-group-item">添加广告</a>
                      <a href="/admin/ad" class="list-group-item">浏览广告</a>
          
                    </li>
                </li>
                
                     <li class="list-group-item"><a href="colors.html" ><i class="glyphicon glyphicon-tint"></i>管理</a></li>
                <li class="list-group-item"><a href="flex.html" ><i class="glyphicon glyphicon-th"></i>轮播图管理</a></li>
                <li class="list-group-item"><a href="login.html" ><i class="glyphicon glyphicon-lock"></i>友情链接管理</a></li>
                <li>
              </ul>
          </div>
 

      
          <div class="col-xs-6 col-sm-3 col-md-offset-1 sidebar-offcanvas" role="navigation" >
         
                         
          @section('content')

           
           @show
                    </ul>
                  </div>
                </div>
                </div>
              

                

 
  </body>
</html>
