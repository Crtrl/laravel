<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>StarySky</title>
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
    <script type="text/javascript" src="/admin/js/site.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" action="/admin/dologin" method="post">
        {{csrf_field()}}
        <h3 class="form-signin-heading">星空论坛</h3>
          @if (count($errors))
          <div class="mws-form-message error">
                <ul style="list-style: none;color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码" autocomplete="off" />
          </div>
        </div>
         <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-comment"></i>
            </div>
            <input type="text" class="form-control" name="captcha" id="captcha" placeholder="请输入验证码" autocomplete="off" />
          </div>
          <img src="{{captcha_src('inverse')}}" onclick="this.src='/captcha/default?'+Math.random()">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container">
        <div class="copyright clearfix text-center">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="index.html">Documentation</a>&nbsp;&bull;&nbsp;Free PSD&nbsp;&bull;&nbsp;<a href="colors.html">Color Picker</a></p>
          <p>Code licensed under , documentation under .</p>
        </div>
      </div>
    </div>
  </body>
</html>
