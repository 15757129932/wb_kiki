<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:107:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/archive/index.html";i:1519436593;s:105:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/base.html";i:1520400732;s:113:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/admin_load_t.html";i:1519436593;s:110:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/admin_top.html";i:1519972965;s:111:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/admin_left.html";i:1519436593;s:107:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/search.html";i:1519436593;s:112:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/list_action.html";i:1519436593;s:113:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/admin_bottom.html";i:1520400972;s:113:"/home/doublecong/dev_dc/gitcode/kiki/Tp5-TuFanInc-Admin/public/../application/admin/view/public/admin_load_b.html";i:1519436593;}*/ ?>
<?php if($box_is_pjax != 1): ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<?php endif; ?>
<title><?php echo \think\Lang::get('list'); ?></title>

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
    <h1>文章列表</h1>
    <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> 文章列表</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <div class="pull-left">
                        <?php echo authAction(CONTROLLER_NAME.'/delete', 'delete_all'); ?> 
                    </div>
                    <div class="box-tools" style="top:10px;">
    <form action="<?php echo search_url('search'); ?>" method="GET" pjax-search="">
        <div class="input-group input-group-sm" style="width:150px;">
            <input type="text" name="search" class="form-control pull-right" value="<?php echo input('get.search'); ?>" placeholder="<?php echo \think\Lang::get('search'); ?>" />
            <div class="input-group-btn"><button type="submit" class="btn btn-default sreachs"><i class="fa fa-search"></i></button></div>
        </div>
    </form>
</div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover table-sort">
                        <tr>
                            <th width="35"><input type="checkbox" class="minimal checkbox-toggle"></th>
                            <th><?php echo \think\Lang::get('id'); ?><?php echo table_sort('id'); ?></th>
                            <th><?php echo \think\Lang::get('title'); ?><?php echo table_sort('title'); ?></th>
                            <th><?php echo \think\Lang::get('typeid'); ?></th>
                            <th><?php echo \think\Lang::get('writer'); ?>/<?php echo \think\Lang::get('id'); ?></th>
                            <th><?php echo \think\Lang::get('click'); ?><?php echo table_sort('click'); ?></th>
                            <th><?php echo \think\Lang::get('create_time'); ?></th>
                            <th><?php echo \think\Lang::get('status'); ?><?php echo table_sort('status'); ?></th>
                            <th width="178"><?php echo \think\Lang::get('action'); ?></th>
                        </tr>
                        <?php if(is_array($dataList) || $dataList instanceof \think\Collection || $dataList instanceof \think\Paginator): $i = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>" class="minimal"></td>
                            <td><?php echo $vo['id']; ?></td>
                            <td>
                                <span class="editable" data-pk="<?php echo $vo['id']; ?>" data-name="title" data-url="<?php echo url(CONTROLLER_NAME.'/edit', 'id='.$vo['id']); ?>" ><?php echo $vo['title']; ?></span>
                                <?php foreach($vo['flag'] as $vo2): if($vo2 == 'c'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_c'); ?></span>
                                <?php elseif($vo2 == 'a'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_a'); ?></span>
                                <?php elseif($vo2 == 'h'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_h'); ?></span>
                                <?php elseif($vo2 == 's'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_s'); ?></span>
                                <?php elseif($vo2 == 'p'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_p'); ?></span>
                                <?php elseif($vo2 == 'j'): ?><span class="label label-info"><?php echo \think\Lang::get('flag_j'); ?></span>
                                <?php endif; endforeach; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo['Arctype']->typename)): ?>
                                <?php echo $vo['Arctype']->typename; else: ?>
                                <?php echo \think\Lang::get('no_arctype'); endif; ?>
                            </td>
                            <td><?php echo $vo['User']->name; ?>/<?php echo $vo['writer']; ?></td>
                            <td><?php echo $vo['click']; ?></td>
                            <td><?php echo $vo['create_time']; ?></td>
                            <td>
                                <a href="javascript:void(0);" data-id="<?php echo $vo['id']; ?>" data-field="status" 
                                data-value="<?php echo $vo['status']; ?>" data-url="<?php echo url('edit', 'id='.$vo['id']); ?>" 
                                class='editimg fa <?php if($vo['status'] == 1): ?>fa-check-circle text-green<?php else: ?>fa-times-circle text-red<?php endif; ?>'></a>
                            </td>
                            <td>
                                <?php if(!empty($vo['arcurl'])): ?>
                                <a class="btn btn-primary btn-xs" href="<?php echo $vo['arcurl']; ?>" target="_blank"><i class="fa fa-eye"></i> <?php echo \think\Lang::get('preview'); ?></a>
                                <?php else: ?>
                                <button class="btn btn-default btn-xs disabled"><i class="fa fa-edit"></i> <?php echo \think\Lang::get('preview'); ?></button>
                                <?php endif; ?>
                                <?php echo authAction(CONTROLLER_NAME.'/edit', 'edit', ['id' => $vo['id']]); ?> 
<?php echo authAction(CONTROLLER_NAME.'/delete', 'delete', $vo['id']); ?> 
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <?php echo $dataList->render(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(function(){
    /*ajax页面加载icheck，有该控件的页面才需要*/
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    
    /*ajax页面加载icheck，有该控件的页面才需要*/
    $(".select2").select2({language:"zh-CN"});
    
    /*全选-反选*/
    $('.checkbox-toggle').on('ifChecked', function(event){
        var _this = $(this);
        var _table = _this.closest('.table');
        _table.find("tr td input[type='checkbox']").iCheck("check");
    });
    $('.checkbox-toggle').on('ifUnchecked', function(event){
        var _this = $(this);
        var _table = _this.closest('.table');
        _table.find("tr td input[type='checkbox']").iCheck("uncheck");
    });
    
    $('.editable').editable({
        emptytext: "empty",
        params: function(params) {      //参数
            var data = {};
            data['id'] = params.pk;
            data[params.name] = params.value;
            return data;
        },
        success: function(response, newValue) {
            var res = $.parseJSON( response );
            if(res.status == 1){
            }else{
                return res.info;
            }
        }
    });
    
    <?php if($rest_login == 1): ?>
    restlogin('<?php echo $rest_login_info; ?>');   //登录超时
    <?php endif; ?>
})
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