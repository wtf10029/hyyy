<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\news\add.html";i:1486200125;s:69:"D:\phpStudy\WWW\hyyy\public/../application/admin\view\pub\extend.html";i:1486270409;}*/ ?>
<!DOCTYPE html>
<html lang="cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" type="image/png">

  
    <title>新闻中心 - 添加新闻</title>


  <link href="__PUBLIC__/css/style.css" rel="stylesheet">
  <link href="__PUBLIC__/css/style-responsive.css" rel="stylesheet">
  
    <!--dynamic table-->
    <link href="__PUBLIC__/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="__PUBLIC__/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/js/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/my.css" />

    <!--multi-select-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/jquery-multi-select/css/multi-select.css" />

    <!--file upload-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-fileupload.min.css" />

    <!--tags input-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/jquery-tags-input/jquery.tagsinput.css" />


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
            <a href="<?php echo url('Index/index'); ?>">首页</a>
        </li>
        <li class="active">添加新闻</li>
    </ul>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            
    <!--body wrapper start-->
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        文章新闻
                    </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="<?php echo url('News/add'); ?>" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <label for="title" class="control-label col-lg-2">新闻标题&nbsp;(必填*)</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">新闻分类&nbsp;(必填*)</label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="classify">
                                            <?php if(is_array($classify) || $classify instanceof \think\Collection): $i = 0; $__LIST__ = $classify;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tag" class="control-label col-lg-2">新闻标签&nbsp;(利于优化)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="tag" type="text" name="tag"  />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="source" class="control-label col-lg-2">文章来源&nbsp;(利于优化)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="source" type="text" name="source"  />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="bro_num" class="control-label col-lg-2">浏览次数</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="bro_num" type="text" name="bro_num"  />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="keywords" class="control-label col-lg-2">关键词&nbsp;(利于优化)</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="keywords" type="text" name="keywords"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">新闻描述&nbsp;(必填*)</label>
                                    <div class="col-sm-10">
                                        <textarea rows="6" name="description" class="form-control" placeholder="请输入80字以内的新闻描述..." maxlength="80" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <label class="control-label col-md-3">缩略图&nbsp;(341*213)</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i>图片添加</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 修改</span>
                                                   <input type="file" name="image" class="default">
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i>移除</a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="ueditor">
                                    <script id="editor" type="text/plain" style="width:100%;height:500px;"></script>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">添加新闻</button>
                                        <button class="btn btn-default" type="reset">重新填写</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
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

    <!--dynamic table-->
    <script type="text/javascript" language="javascript" src="__PUBLIC__/js/advanced-datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/data-tables/DT_bootstrap.js"></script>
    <!--dynamic table initialization -->
    <script src="__PUBLIC__/js/dynamic_table_init.js"></script>

    <!-- uaditor -->
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/uaditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/uaditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/uaditor/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript">
        //实例化编辑器
        var ue = UE.getEditor('editor');
    </script>

    <!--icheck -->
    <script src="__PUBLIC__/js/iCheck/jquery.icheck.js"></script>
    <script src="__PUBLIC__/js/icheck-init.js"></script>
    <!--multi-select-->
    <script type="text/javascript" src="__PUBLIC__/js/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-multi-select/js/jquery.quicksearch.js"></script>
    <script src="__PUBLIC__/js/multi-select-init.js"></script>
    <!--spinner-->
    <script type="text/javascript" src="__PUBLIC__/js/fuelux/js/spinner.min.js"></script>
    <script src="__PUBLIC__/js/spinner-init.js"></script>
    <!--file upload-->
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap-fileupload.min.js"></script>
    <!--tags input-->
    <script src="__PUBLIC__/js/jquery-tags-input/jquery.tagsinput.js"></script>
    <script src="__PUBLIC__/js/tagsinput-init.js"></script>
    <!--bootstrap input mask-->
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


</body>
</html>
