<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:63:"/var/www/html/public/../application/admin/view/index/index.html";i:1521531650;s:63:"/var/www/html/public/../application/admin/view/public/base.html";i:1521531651;s:71:"/var/www/html/public/../application/admin/view/public/admin_load_t.html";i:1521531651;s:68:"/var/www/html/public/../application/admin/view/public/admin_top.html";i:1521531651;s:69:"/var/www/html/public/../application/admin/view/public/admin_left.html";i:1521531651;s:71:"/var/www/html/public/../application/admin/view/public/admin_bottom.html";i:1521531651;s:71:"/var/www/html/public/../application/admin/view/public/admin_load_b.html";i:1521531651;}*/ ?>
<?php if($box_is_pjax != 1): ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php endif; ?>
<title>后台首页</title>

<?php if($box_is_pjax != 1): ?>
<link rel="stylesheet" type="text/css" href="__static__/global/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/global/bootstrap/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/system/iCheck/minimal/blue.css" />
<link rel="stylesheet" type="text/css" href="__static__/system/select2/select2.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/system/dist/css/AdminLTE.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/system/dist/css/skins/skin-blue.min.css" />

<script type="text/javascript" src="__static__/global/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="__static__/global/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__static__/system/slimScroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="__static__/system/dist/js/app.min.js"></script>
<script type="text/javascript" src="__static__/global/jQuery/jquery.pjax.js"></script>

<link rel="stylesheet" type="text/css" href="__static__/system/kindeditor/themes/default/default.css" />
<script type="text/javascript" src="__static__/system/kindeditor/kindeditor-all.js"></script>
<script type="text/javascript" src="__static__/system/kindeditor/lang/zh-CN.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="__static__/system/dist/js/html5shiv.min.js"></script>
<script type="text/javascript" src="__static__/system/dist/js/respond.min.js"></script>
<![endif]-->
<?php endif; if($box_is_pjax != 1): ?>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
<?php endif; if($box_is_pjax != 1): ?>
    <header class="main-header">
        <a href="#" class="logo"><span class="logo-mini">OBM</span><span class="logo-lg">OBMCARE</span></a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="/" target="_blank" ><?php echo \think\Lang::get('web_home'); ?></a>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="javascript:void(0);" class="delete-one" data-url="<?php echo url('Index/cleanCache'); ?>" data-id="-1" ><?php echo \think\Lang::get('clean_cache'); ?></a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo cookie('avatar'); ?>" class="user-image">
                            <span class="hidden-xs"><?php echo cookie('name'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo cookie('avatar'); ?>" class="img-circle">
                                <p><?php echo cookie('name'); ?><small>Member since admin</small></p>
                            </li>
                            <li c  lass="user-footer">
                                <div class="pull-left"><a href="<?php echo url('User/edit', ['id' => cookie('uid')]); ?>" class="btn btn-default btn-flat">个人设置</a></div>
                                <div class="pull-right"><a href="<?php echo url('Login/loginOut'); ?>" class="btn btn-default btn-flat">退出</a></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<?php endif; if($box_is_pjax != 1): ?>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img src="<?php echo cookie('avatar'); ?>" class="img-circle" alt="<?php echo cookie('name'); ?>"></div>
                <div class="pull-left info">
                    <p><?php echo cookie('name'); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i>在线</a>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <li class="header">菜单</li>
                <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oo): $mod = ($i % 2 );++$i;if($oo['level'] == '1' && $oo['name'] == 'Index/index'): ?>
                    <li><a href="<?php echo url(MODULE_NAME.'/'.$oo['name']); ?>"><i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span></a></li>
                    <?php elseif($oo['level'] == '1'): ?>
                    <li class="treeview">
                        <a href="javascript:void(0);">
                            <i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;if($to['pid'] == $oo['id']): ?>
                            <li><a href="<?php echo url(MODULE_NAME.'/'.$to['name']); ?>"><i class="<?php echo $to['icon']; ?>"></i><?php echo $to['title']; ?></a></li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </section>
    </aside>
<?php endif; ?>
    
    
    <div class="content-wrapper" id="pjax-container">
        
<section class="content-header">
    <h1>后台首页</h1>
    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> 后台首页</li>
    </ol>
</section>
<section class="content">
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p>您好，欢迎您的到来！</p>
        <p>当你在犹豫的时候，这个世界很小；当你做出行动的时候，这个世界就很大。</p>
    </div>
    
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-yellow">
                <div class="inner"><h3><?php echo $userTotal; ?></h3><p><?php echo \think\Lang::get('user_num'); ?></p></div>
                <div class="icon"><i class="fa fa-users"></i></div>
                <a href="<?php echo url('User/index'); ?>" class="small-box-footer"><?php echo \think\Lang::get('more'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-green">
                <div class="inner"><h3><?php echo $archiveTotal; ?></h3><p><?php echo \think\Lang::get('archive_num'); ?></p></div>
                <div class="icon"><i class="fa fa-file-text"></i></div>
                <a href="<?php echo url('Archive/index'); ?>" class="small-box-footer"><?php echo \think\Lang::get('more'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-aqua">
                <div class="inner"><h3><?php echo $userNear; ?></h3><p><?php echo \think\Lang::get('new_user_num'); ?></p></div>
                <div class="icon"><i class="fa fa-user-plus"></i></div>
                <a href="<?php echo url('User/index'); ?>" class="small-box-footer"><?php echo \think\Lang::get('more'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-red">
                <div class="inner"><h3><?php echo $guestbookTotal; ?></h3><p><?php echo \think\Lang::get('new_guestbook_num'); ?></p></div>
                <div class="icon"><i class="fa fa-commenting"></i></div>
                <a href="<?php echo url('Guestbook/index'); ?>" class="small-box-footer"><?php echo \think\Lang::get('more'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-7 col-sm-7 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo \think\Lang::get('login_30_count'); ?></h3>
                </div>
                <div class="box-body">
                    <canvas id="login-line" height="312"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo \think\Lang::get('login_new'); ?></h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th><?php echo \think\Lang::get('login_l_ip'); ?></th>
                            <th><?php echo \think\Lang::get('login_l_address'); ?></th>
                            <th><?php echo \think\Lang::get('login_l_time'); ?></th>
                        </tr>
                        <?php if(is_array($loginLogList) || $loginLogList instanceof \think\Collection || $loginLogList instanceof \think\Paginator): $i = 0; $__LIST__ = $loginLogList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><span class="label label-success"><?php echo $vo['ip']; ?></span></td>
                            <td><?php echo $vo['country']; ?> <?php echo $vo['province']; ?> <?php echo $vo['city']; ?> <?php echo $vo['district']; ?></td>
                            <td><?php echo time_line($vo['create_time']); ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo \think\Lang::get('user_l_group'); ?></h3>
                </div>
                <div class="box-body">
                    <canvas id="user-pie" height="312"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo \think\Lang::get('system_config'); ?></h3>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-hover">
                        <?php if(is_array($systemConfig) || $systemConfig instanceof \think\Collection || $systemConfig instanceof \think\Paginator): $i = 0; $__LIST__ = $systemConfig;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $key; ?>：<?php echo $vo; ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo \think\Lang::get('feedback'); ?></h3>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" method="POST" action="<?php echo url('Guestbook/Create'); ?>" onsubmit="return false" >
                        <input type="hidden" name="status" value="1" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-9"><input class="form-control" name="title" placeholder="标题"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">邮箱</label>
                            <div class="col-sm-9"><input class="form-control" name="email" placeholder="邮箱"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">留言内容</label>
                            <div class="col-sm-9"><textarea class="form-control" style="resize:none;height:150px;" name="content" placeholder="留言内容"></textarea></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-9">
                                <button type="reset" class="btn btn-warning pull-right"><?php echo \think\Lang::get('reset'); ?></button>
                                <button type="submit" class="btn btn-info pull-left submits" data-loading-text="&lt;i class='fa fa-spinner fa-spin '&gt;&lt;/i&gt; <?php echo \think\Lang::get('submit'); ?>"><?php echo \think\Lang::get('submit'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(function () {
    var loginLogLineJson = <?php echo $loginLogLineJson; ?>;
    var loginline = document.getElementById('login-line').getContext('2d');
    new Chart(loginline, {
        type: 'line',
        data: loginLogLineJson,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
    
    var groupPieJson = <?php echo $groupPieJson; ?>;
    var userpie = document.getElementById('user-pie').getContext('2d');
    new Chart(userpie, {
        type: 'pie',
        data: groupPieJson,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
    
    <?php if($rest_login == 1): ?>
    restlogin('<?php echo $rest_login_info; ?>');   //登录超时
    <?php endif; ?>
});
</script>

    </div>
    
        
<?php if($box_is_pjax != 1): ?>
    <footer class="main-footer">
        <div class="pull-right">Version 1.0</div>
        Copyright &copy; 2018-2028 <a href="http://www.theobmcare.com/" target="_blank">OBMCARE</a>
    </footer>
<?php endif; if($box_is_pjax != 1): ?>
</div>
<?php endif; if($box_is_pjax != 1): ?>
<script type="text/javascript" src="__static__/global/jQuery/jquery.form.js"></script>

<script type="text/javascript" src="__static__/system/editable/bootstrap-editable.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/system/editable/bootstrap-editable.css" />

<script type="text/javascript" src="__static__/global/nprogress/nprogress.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/global/nprogress/nprogress.css" />

<link rel="stylesheet" type="text/css" href="__static__/global/jQuery-gDialog/animate.min.css" />
<link rel="stylesheet" type="text/css" href="__static__/global/Amaranjs/amaran.min.css" />
<script type="text/javascript" src="__static__/global/Amaranjs/jquery.amaran.min.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/global/bootstrap/js/bootstrap-dialog.min.css" />
<script type="text/javascript" src="__static__/global/bootstrap/js/bootstrap-dialog.min.js"></script>

<script type="text/javascript" src="__static__/system/datetimepicker/moment-with-locales.min.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/system/datetimepicker/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="__static__/system/datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="__static__/system/multiselect/multiselect.min.js"></script>

<script type="text/javascript" src="__static__/system/iCheck/icheck.min.js"></script>

<script type="text/javascript" src="__static__/system/select2/select2.min.js"></script>
<script type="text/javascript" src="__static__/system/select2/i18n/zh-CN.js"></script>

<link rel="stylesheet" type="text/css" href="__static__/system/bootstrap-switch/bootstrap-switch.min.css" />
<script type="text/javascript" src="__static__/system/bootstrap-switch/bootstrap-switch.min.js"></script>

<link rel="stylesheet" type="text/css" href="__static__/global/cropper/cropper.min.css" />
<script type="text/javascript" src="__static__/global/cropper/cropper.min.js"></script>
<link rel="stylesheet" type="text/css" href="__static__/global/cropper/cropper.main.css" />
<script type="text/javascript" src="__static__/global/cropper/cropper.main.js"></script>

<script type="text/javascript" src="__static__/system/chart/Chart.min.js"></script>

<script type="text/javascript" src="__static__/system/dist/js/common.js"></script>
<?php endif; if($box_is_pjax != 1): ?>
</body>
</html>
<?php endif; ?>