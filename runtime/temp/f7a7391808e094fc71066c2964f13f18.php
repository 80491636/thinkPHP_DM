<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\dm\public/../application/admin\view\article\add.html";i:1564019342;s:69:"D:\phpStudy\PHPTutorial\WWW\dm\application\admin\view\common\top.html";i:1564048490;s:70:"D:\phpStudy\PHPTutorial\WWW\dm\application\admin\view\common\left.html";i:1564662853;}*/ ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            童老师ThinkPHP交流群：484519446
        </title>
        <meta name="description" content="Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Basic Styles-->
        <link href="http://127.0.0.1/dm/public/static/admin/style/bootstrap.css" rel="stylesheet">
        <link href="http://127.0.0.1/dm/public/static/admin/style/font-awesome.css" rel="stylesheet">
        <link href="http://127.0.0.1/dm/public/static/admin/style/weather-icons.css" rel="stylesheet">
        <!--Beyond styles-->
        <link id="beyond-link" href="http://127.0.0.1/dm/public/static/admin/style/beyond.css" rel="stylesheet"
        type="text/css">
        <link href="http://127.0.0.1/dm/public/static/admin/style/demo.css" rel="stylesheet">
        <link href="http://127.0.0.1/dm/public/static/admin/style/typicons.css" rel="stylesheet">
        <link href="http://127.0.0.1/dm/public/static/admin/style/animate.css" rel="stylesheet">
        <!-- 配置文件 -->
        <script type="text/javascript" src="http://127.0.0.1/dm/public/static/admin/ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="http://127.0.0.1/dm/public/static/admin/ueditor/ueditor.all.js"></script>

    </head>
    
    <body>
        <!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="<?php echo url('index/index'); ?>" class="navbar-brand">
                    <small>
                            <img src="http://127.0.0.1/dm/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/dm/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit'); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

    <!-- /头部 -->

        <div class="main-container container-fluid">
            <div class="page-container">
                    <!-- Page Sidebar -->
    <div class="page-sidebar" id="sidebar">
        <!-- Page Sidebar Header-->
        <div class="sidebar-header-wrapper">
            <input class="searchinput" type="text">
            <i class="searchicon fa fa-search"></i>
            <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
        </div>
        <!-- /Page Sidebar Header -->
        <!-- Sidebar Menu -->
        <ul class="nav sidebar-menu">
            <!--Dashboard-->
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">管理员</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('admin/lst'); ?>">
                            <span class="menu-text">
                                管理列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-file-text"></i>
                    <span class="menu-text">文档</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('article/lst'); ?>">
                            <span class="menu-text">
                                文章列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">栏目管理</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('cate/lst'); ?>">
                            <span class="menu-text">
                                栏目列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">tag菜单管理</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('tags/lst'); ?>">
                            <span class="menu-text">
                                tags列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-link"></i>
                    <span class="menu-text">bander图</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('bander/lst'); ?>">
                            <span class="menu-text">
                                轮播图列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-link"></i>
                    <span class="menu-text">友情连接</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="<?php echo url('links/lst'); ?>">
                            <span class="menu-text">
                                连接列表                                    </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li> 

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">系统</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="/admin/document/index.html">
                            <span class="menu-text">
                                配置                                   </span>
                            <i class="menu-expand"></i>
                        </a>
                    </li>
                </ul>                            
            </li>                        
            
                                    
            
        </ul>
        <!-- /Sidebar Menu -->
    </div>
    <!-- /Page Sidebar -->
                <!-- Page Content -->
                <div class="page-content">
                    <!-- Page Breadcrumb -->
                    <div class="page-breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo url('index/index'); ?>">
                                    系统
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    文章列表
                                </a>
                            </li>
                            <li class="active">
                                添加文章
                            </li>
                        </ul>
                    </div>
                    <!-- /Page Breadcrumb -->
                    <!-- Page Body -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="widget">
                                    <div class="widget-header bordered-bottom bordered-blue">
                                        <span class="widget-caption">
                                            新增文章
                                        </span>
                                    </div>
                                    <div class="widget-body">
                                        <div id="horizontal-form">
                                            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="" method="post">
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">
                                                        标题
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="title" placeholder="" name="title"
                                                        required="" type="text">
                                                    </div>
                                                    <p class="help-block col-sm-4 red">
                                                        * 必填
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        简介
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="desc" placeholder="" name="desc"
                                                        required="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        作者
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="author" placeholder="" name="author"
                                                        required="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        关键字
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <input class="form-control" id="keywords" placeholder="" name="keywords"
                                                        required="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        所属栏目
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <select name="cateid">
                                                            <option value ="">请选择栏目</option>
                                                            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                                                            <option value ="<?php echo $user['id']; ?>"><?php echo $user['catename']; ?></option>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        缩略图
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <input type="file" name="pic">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        推荐
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <lable>
                                                            <input class="checkbox-slider colored-darkorange" type="checkbox" name="state">
                                                            <span class="text"></span>
                                                        </lable>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="group_id" class="col-sm-2 control-label no-padding-right">
                                                        内容
                                                    </label>
                                                    <div class="col-sm-6">
                                                        <!-- 加载编辑器的容器 -->
                                                        <script id="container" name="content" type="text/plain" style = "height: 400px">这里写你的初始化内容</script>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-default">
                                                            保存信息
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Body -->
                </div>
                <!-- /Page Content -->
            </div>
        </div>
        <!--Basic Scripts-->
        <script src="http://127.0.0.1/dm/public/static/admin/style/jquery_002.js">
        </script>
        <script src="http://127.0.0.1/dm/public/static/admin/style/bootstrap.js">
        </script>
        <script src="http://127.0.0.1/dm/public/static/admin/style/jquery.js">
        </script>
        <!--Beyond Scripts-->
        <script src="http://127.0.0.1/dm/public/static/admin/style/beyond.js">
        </script>
        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
        </script>

    </body>

</html>