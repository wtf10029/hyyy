<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\index\index.html";i:1486200124;s:69:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\pub\extend.html";i:1486270409;}*/ ?>
<!DOCTYPE html>
<html lang="cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" type="image/png">

  
    <title>首页</title>


  <link href="__PUBLIC__/css/style.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style-responsive.css" rel="stylesheet">
  
    <!--icheck-->
    <link href="__PUBLIC__/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link href="__PUBLIC__/js/iCheck/skins/square/square.css" rel="stylesheet">
    <link href="__PUBLIC__/js/iCheck/skins/square/red.css" rel="stylesheet">
    <link href="__PUBLIC__/js/iCheck/skins/square/blue.css" rel="stylesheet">

    <!--dashboard calendar-->
    <link href="__PUBLIC__/css/clndr.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="__PUBLIC__/js/morris-chart/morris.css">

    <!-- 时钟 -->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/csshake.min.css">

    <style type="text/css">
        /* clock */
        .clock{width:360px;height:120px;margin:10px auto 0 auto;color:#d96457;font-family:"Lato", sans-serif;}
        .clock div{position:relative;float:left;background:#ffe8e8;border-radius:6px;width:96px;height:80px;line-height:80px;text-align:center;font-size:60px;margin:0px 5px;}
    </style>


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
        <li class="active">后台首页</li>
    </ul>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-body extra-pad">
                    <iframe allowtransparency="true" frameborder="0" width="80%" height="98" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=2&z=3&t=1&v=0&d=1&bd=0&k=000000&f=&q=1&e=1&a=1&c=58362&w=530&h=98&align=center"></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-body extra-pad" style="height:153px;">
                    <p style="line-height:98px;text-align:center;font-size:50px;"><?php echo date("Y年m月d日",$time); ?></p>
                 </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-body extra-pad" style="height:153px;">
                    <div class='clock'>
                        <div class='h shake shake-slow'></div>
                        <div class='m shake shake-slow'></div>
                        <div class='s shake shake-slow'></div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!--statistics start-->
            <div class="row state-overview">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="panel purple">
                        <div class="symbol">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="state-value">
                            <div class="value"><?php echo (isset($admin_num) && ($admin_num !== '')?$admin_num:"0"); ?></div>
                            <div class="title">后台用户数</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="panel red">
                        <div class="symbol">
                            <i class="fa fa-list-alt"></i>
                        </div>
                        <div class="state-value">
                            <div class="value"><?php echo (isset($news_num) && ($news_num !== '')?$news_num:"0"); ?></div>
                            <div class="title">新闻数量</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row state-overview">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="panel blue">
                        <div class="symbol">
                            <i class="fa fa-picture-o"></i>
                        </div>
                        <div class="state-value">
                            <div class="value"><?php echo (isset($image_num) && ($image_num !== '')?$image_num:"0"); ?></div>
                            <div class="title">图片数量</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="panel green">
                        <div class="symbol">
                            <i class="fa fa-dropbox"></i>
                        </div>
                        <div class="state-value">
                            <div class="value"><?php echo (isset($product_num) && ($product_num !== '')?$product_num:"0"); ?></div>
                            <div class="title">产品数量</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--statistics end-->
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">技术支持</h3>
                </div>
                <div class="panel-body">
                    杭州拾禾网络有限公司
                </div>
                <div class="panel-body">
                    <b>电话:</b>15058199996
                </div>
                <div class="panel-body">
                    <b>QQ:</b>319941671
                </div>
                <div class="panel-body">
                    <b>官网:</b>www.hzshihe.cn
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-body">
                    <div class="row revenue-states">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h4>最新新闻</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>标题</th>
                                        <th>分类</th>
                                        <th>浏览量</th>
                                        <th>发布时间</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($news) || $news instanceof \think\Collection): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><?php echo $vo['id']; ?></td>
                                        <td><?php echo $vo['title']; ?></td>
                                        <td><?php echo $catename[$vo['classify']]; ?></td>
                                        <td><?php echo $vo['bro_num']; ?></td>
                                        <td><?php echo date("Y-m-d H:i",$vo['createtime']); ?></td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <header class="panel-heading">
                    系统信息
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>名称</th>
                                <th>信息</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($system) || $system instanceof \think\Collection): $i = 0; $__LIST__ = $system;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>

                                <td><?php echo $key; ?></td>
                                <td><?php echo $vo; ?></td>

                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


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

    <!--easy pie chart-->
    <script src="__PUBLIC__/js/easypiechart/jquery.easypiechart.js"></script>
    <script src="__PUBLIC__/js/easypiechart/easypiechart-init.js"></script>

    <!--Sparkline Chart-->
    <script src="__PUBLIC__/js/sparkline/jquery.sparkline.js"></script>
    <script src="__PUBLIC__/js/sparkline/sparkline-init.js"></script>

    <!--icheck -->
    <script src="__PUBLIC__/js/iCheck/jquery.icheck.js"></script>
    <script src="__PUBLIC__/js/icheck-init.js"></script>

    <!-- jQuery Flot Chart-->
    <script src="__PUBLIC__/js/flot-chart/jquery.flot.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/flot-chart/jquery.flot.tooltip.js"></script>
    <script src="__PUBLIC__/js/flot-chart/jquery.flot.resize.js"></script>

    <!--Morris Chart-->
    <script src="__PUBLIC__/js/morris-chart/morris.js"></script>
    <script src="__PUBLIC__/js/morris-chart/raphael-min.js"></script>

    <!--Calendar-->
    <script src="__PUBLIC__/js/calendar/clndr.js"></script>
    <script src="__PUBLIC__/js/calendar/evnt.calendar.init.js"></script>
    <script src="__PUBLIC__/js/calendar/moment-2.2.1.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

    <!--Dashboard Charts-->
    <script src="__PUBLIC__/js/dashboard-chart-init.js"></script>

    <!-- 时钟 -->
    <script src="__PUBLIC__/js/index.js"></script>


</body>
</html>
