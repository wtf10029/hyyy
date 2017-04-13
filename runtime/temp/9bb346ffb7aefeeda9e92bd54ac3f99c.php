<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\system\cache.html";i:1486200125;s:69:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\pub\extend.html";i:1486270409;}*/ ?>
<!DOCTYPE html>
<html lang="cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" type="image/png">

  
    <title>系统管理 - 缓存清理</title>


  <link href="__PUBLIC__/css/style.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style-responsive.css" rel="stylesheet">
  
    


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="__PUBLIC__/js/html5shiv.js"></script>
  <script src="__PUBLIC__/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="__PUBLIC__/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="__PUBLIC__/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="__PUBLIC__/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"></a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="<?php echo url('Index/index'); ?>"><i class="fa fa-home"></i> <span>后台首页</span></a></li>

                <?php if(in_array(1,$nid)): ?>
                    <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>用户管理</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo url('User/add'); ?>">添加用户</a></li>
                            <li><a href="<?php echo url('User/lst'); ?>">用户列表</a></li>
                        </ul>
                    </li>
                <?php endif; if(in_array(2,$nid)): ?>
                <li class="menu-list"><a href=""><i class="fa fa-folder"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo url('Category/add'); ?>">添加分类</a></li>
                        <li><a href="<?php echo url('Category/lst'); ?>">分类列表</a></li>
                    </ul>
                </li>
                <?php endif; if(in_array(3,$nid)): ?>
                    <li class="menu-list"><a href=""><i class="fa fa-pencil-square-o"></i> <span>权限管理</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo url('Jurisdiction/index'); ?>"> 角色管理</a></li>
                            <li><a href="<?php echo url('Jurisdiction/node'); ?>">用户组管理</a></li>
                        </ul>
                    </li>
                <?php endif; if(in_array(4,$nid)): ?>
                    <li class="menu-list"><a href=""><i class="fa fa-trash-o"></i> <span>回收站</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo url('Recycle/user'); ?>">用户回收站</a></li>
                            <li><a href="<?php echo url('Recycle/productLst'); ?>">产品回收站</a></li>
                            <li><a href="<?php echo url('Recycle/newsLst'); ?>">新闻回收站</a></li>
                            <li><a href="<?php echo url('Recycle/bannerLst'); ?>">轮播回收站</a></li>
                            <li><a href="<?php echo url('Recycle/imgLst'); ?>">广告位回收站</a></li>
                        </ul>
                    </li>
                <?php endif; if(in_array(5,$nid)): ?>
                <li><a href="<?php echo url('Product/lst'); ?>"><i class="fa fa-dropbox"></i> <span>产品中心</span></a></li>
                <?php endif; if(in_array(6,$nid)): ?>
                <li><a href="<?php echo url('News/lst'); ?>"><i class="fa fa-list-alt"></i> <span>新闻中心</span></a></li>
                <?php endif; if(in_array(7,$nid)): ?>
                <li><a href="<?php echo url('Banner/lst'); ?>"><i class="fa fa-picture-o"></i> <span>轮播图</span></a></li>
                <?php endif; if(in_array(8,$nid)): ?>
                    <li class="menu-list"><a href=""><i class="fa fa-desktop"></i> <span>广告位</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo url('Image/add'); ?>">添加广告位</a></li>
                            <li><a href="<?php echo url('Image/show'); ?>">广告位列表</a></li>
                        </ul>
                    </li>
                <?php endif; if(in_array(9,$nid)): ?>
                    <li><a href="<?php echo url('Leave/lst'); ?>"><i class="fa fa-comments"></i> <span>留言管理</span></a></li>
                <?php endif; if(in_array(10,$nid)): ?>
                    <li class="menu-list"><a href=""><i class="fa fa-cog"></i> <span>系统管理</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo url('System/cache'); ?>">系统缓存清理</a></li>
                            <li><a href="<?php echo url('System/site'); ?>">站点设置</a></li>
                            <li><a href="<?php echo url('Link/lst'); ?>">友情链接</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <li><a href="<?php echo url('Pub/loginout'); ?>"><i class="fa fa-sign-in"></i> <span>退出登录</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-edit"></i>&nbsp;中文网站后台管理
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">选择你要管理的版本后台</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="<?php echo url('admin/Index/index'); ?>">
                                    <div class="task-info">
                                        <div><i class="fa fa-circle"></i>管理中文网站</div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="<?php echo url('admin_en/Index/index'); ?>">
                                    <div class="task-info">
                                        <div><i class="fa fa-circle-o"></i>管理英文网站</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="__PUBLIC__/images/favicon.ico" alt="" />
                        <?php echo $username; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="<?php echo url('User/modify'); ?>"><i class="fa fa-user"></i>修改密码</a></li>
                        <li><a href="<?php echo url('Pub/loginout'); ?>"><i class="fa fa-sign-out"></i>退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            
    <ul class="breadcrumb">
        <li>
            <a href="#">首页</a>
        </li>
        <li class="active">缓存清理</li>
    </ul>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            
    <section class="panel">
        <header class="panel-heading">
            清理缓存
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                
                <a class="fa fa-times" href="javascript:;"></a>
            </span>
        </header>
        <div class="panel-body">
            <div class="alert alert-warning fade in">
                <button type="button" class="close close-sm" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>缓存大小:</strong> /model/runtime/ <?php echo $size; ?>
            </div>
            <div class="progress progress-striped active progress-sm">
                <div id="clear" style="width: 0%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-success">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
            <button class="btn btn-success btn-lg btn-block" type="button" onclick="cle()">清&nbsp;除&nbsp;缓&nbsp;存</button>
        </div>
    </section>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer" style="z-index:999999;">
            2016 &copy; 杭州拾禾网络有限公司
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
<script src="__PUBLIC__/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="__PUBLIC__/js/jquery-migrate-1.2.1.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/modernizr.min.js"></script>
<script src="__PUBLIC__/js/jquery.nicescroll.js"></script>

<!--common scripts for all pages-->
<script src="__PUBLIC__/js/scripts.js"></script>

    <script type="text/javascript">
        function cle(){
            var num = 0;
            var i = setInterval(function() {
                num++;
                $('#clear').css('width',num+'%');
                if (num >= 100){
                    window.location.href = "<?php echo url('System/cachedo'); ?>";
                    clearInterval(i);
                }
            }, 10);
        }
    </script>


</body>
</html>
