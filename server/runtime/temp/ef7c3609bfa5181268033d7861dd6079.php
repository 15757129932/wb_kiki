<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"/var/www/html/obm/public/../application/admin/view/login/index.html";i:1520575995;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>登陆</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" type="text/css" href="__static__/global/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/global/bootstrap/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/global/Amaranjs/amaran.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/system/dist/css/AdminLTE.min.css" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/system/dist/js/html5shiv.min.js"></script>
<script type="text/javascript" src="/static/system/dist/js/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition login-page" style="height:auto;">
<div class="login-box">
    <div class="login-logo"><a href="#">THE OBM CARE</a></div>
    <div class="login-box-body">
        <p class="login-box-msg">请填写用户名密码登陆系统</p>
        <form action="<?php echo url('Login/checkLogin'); ?>" method="POST" onsubmit="return false" >
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="用户名">
                <span class="glyphicon form-control-feedback fa fa-user fa-lg"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="密码">
                <span class="glyphicon form-control-feedback fa fa-lock fa-lg"></span>
            </div>
            <div class="row form-group">
                <div class="col-xs-6"><input class="form-control" name="code" placeholder="验证码"></div>
                <div class="col-xs-4">
                    <img src="<?php echo captcha_src(); ?>" id="code" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?rnd=' + Math.random();" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat login" data-loading-text="&lt;i class='fa fa-spinner fa-spin '&gt;&lt;/i&gt; 登陆">登陆</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="__static__/global/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="__static__/global/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__static__/global/jQuery/jquery.form.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/global/jQuery-gDialog/animate.min.css" />
<script type="text/javascript" src="__static__/global/Amaranjs/jquery.amaran.min.js"></script>
<script type="text/javascript" src="__static__/system/dist/js/login.js"></script>
</body>
</html>