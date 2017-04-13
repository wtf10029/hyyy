<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\WWW\hyyy\public/../application/index\view\news\detail.html";i:1486200132;s:72:"D:\phpStudy\WWW\hyyy\public/../application/index\view\layouts\index.html";i:1486274109;}*/ ?>
<!DOCTYPE html>
<html lang="cn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="<?php echo (isset($system['seo_keywords']) && ($system['seo_keywords'] !== '')?$system['seo_keywords']:''); ?>">
  <meta name="description" content="<?php echo (isset($system['seo_description']) && ($system['seo_description'] !== '')?$system['seo_description']:''); ?>">
  <link rel="icon" type="image/png" href="__PUBLIC__/images/favicon.jpg">
  <link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
  <link href="__PUBLIC__/css/lanren.css" rel="stylesheet" type="text/css" />
  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
  
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <title>新闻详情</title>
</head>

<body>
  <div class="main-row">
    <nav class="navbar navbar-primary">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed glyphicon glyphicon-align-justify" style="font-size: 20px" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a class="navbar-brand" href="<?php echo url('index/Index/index'); ?>">
            <img alt="华豫医药" src="__PUBLIC__/images/logo.jpg">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="header-navbar-collapse" class="collapse navbar-collapse">
          <div class="zh-en"><a href="<?php echo url('index/Index/index'); ?>">中文</a>|<a href="<?php echo url('index_en/Index/index'); ?>">英文</a></div>
          <div class=" navbar-right">
            <ul class="nav navbar-nav">
              <li>
                <a href="<?php echo url('index/Index/index'); ?>">首页</a>
              </li>
              <li>
                <a href="<?php echo url('index/Aboutus/index'); ?>">关于华豫</a>
              </li>
              <li>
                <a href="<?php echo url('index/Product/index'); ?>">产品中心</a>
              </li>
              <li>
                <a href="<?php echo url('index/News/index'); ?>">新闻中心</a>
              </li>
              <li>
                <a href="<?php echo url('index/Contact/index'); ?>">联系我们</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!-- content -->
    
    <!--banner-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol>
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="__PUBLIC__/images/ny-banner01.jpg" alt="华豫医药">
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="product-row">
        <div class="location">
          <div class="col-xs-12 col-sm-12 col-md-12">您所在的位置：<a href="<?php echo url('index/Index/index'); ?>"> 首页 ></a><a href="<?php echo url('index/News/index'); ?>"> 新闻中心 </a> >新闻详情</div>
        </div>
        <div class="basic-information">
          
          <div class="basic-content">
            <?php echo $news['content']; ?>
            <div class="news-bottom">
              <p> &nbsp;&nbsp;本文关键词 : 
                <?php if(empty($keywords)): ?>
                  暂无
                <?php else: if(is_array($keywords) || $keywords instanceof \think\Collection): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <?php echo $vo; endforeach; endif; else: echo "" ;endif; endif; ?>
              </p>
              <p> &nbsp;&nbsp;相关文章推荐：</p>
              <?php if(empty($cor)): ?>
                <p>暂无相关文章</p>
              <?php else: if(is_array($cor) || $cor instanceof \think\Collection): $i = 0; $__LIST__ = $cor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <p>《<span><a href="<?php echo url('index/News/detail',array('id' => $vo['id'])); ?>"><?php echo $vo['title']; ?></span></a>》</p>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
              <div class="page">
                <ul class="pager">
                  <li class="previous">
                      <font>上一篇:</font>
                      <?php if(empty($up)): ?>
                        <span>没有了</span>
                      <?php else: ?>
                        <a href="<?php echo url('index/News/detail',array('id' => $up['id'])); ?>"><span><?php echo $up['title']; ?></span></a>
                      <?php endif; ?>
                  </li>
                  <li class="next">
                      <font>下一篇:</font>
                      <?php if(empty($down)): ?>
                        <span>没有了</span>
                      <?php else: ?>
                        <a href="<?php echo url('index/News/detail',array('id' => $down['id'])); ?>"><span><?php echo $down['title']; ?></span></a>
                      <?php endif; ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>

    <!-- end content -->
    <div class="bottom">
      <div class="row-bottom">
        <div class="col-md-2 col-xs-6">
          <div class="menu">
            <h4>关于我们</h4>
            <p><a target="_blank" href="<?php echo url('index/Aboutus/index'); ?>">公司简介</a></p>
            <p><a href="<?php echo url('index/Aboutus/index'); ?>">发展历程</a></p>
            <p><a href="<?php echo url('index/Aboutus/index'); ?>">企业文化</a></p>
          </div>
        </div>
        <div class="col-md-2 col-xs-6">
          <div class="menu">
            <h4>产品展示</h4>
            <p><a target="_blank" href="<?php echo url('index/Product/index'); ?>">用途范围</a></p>
            <p><a href="<?php echo url('index/Product/index'); ?>">功能特点</a></p>
            <p><a href="<?php echo url('index/Product/index'); ?>">产品优势</a></p>
          </div>
        </div>
        <div class="col-md-2 col-xs-6">
          <div class="menu">
            <h4>新闻中心</h4>
            <p><a target="_blank" href="<?php echo url('index/News/index'); ?>">公司新闻</a></p>
            <p><a href="<?php echo url('index/News/index_hy'); ?>">行业新闻</a></p>
          </div>
        </div>
        <div class="col-md-2 col-xs-6">
          <div class="menu">
            <h4>联系我们</h4>
            <p><a target="_blank" href="<?php echo url('index/Contact/index'); ?>">联系方式</a></p>
            <p><a href="<?php echo url('index/Contact/index'); ?>">公司地址</a></p>
            <p><a href="<?php echo url('index/Contact/index'); ?>">在线咨询</a></p>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="er-code">
            <div class="col-md-6 col-xs-6">
              <p>精彩内容请关注</p>
              <p><?php echo $system['tel']; ?></p>
              <a href="http://wpa.qq.com/msgrd?V=1&uin=3391648175&exe=qq&Site=qq&menu=yes"><button type="button" class="btn btn-warning zx">在线咨询</button></a>
            </div>
            <div class="col-md-6 col-xs-6">
              <img src="__IMAGE__/<?php echo $wem['url']; ?>" alt="<?php echo $wem['title']; ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="foot-bottom">
        <div class="jishu">

          <ul style="width:100%;">
            <li><a href="###">友情链接:</a></li>
            <?php if(is_array($link) || $link instanceof \think\Collection): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $vo['url']; ?>" title="<?php echo $vo['title']; ?>" target="_blank"><?php echo $vo['title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>

          <div class="col-xs-12 col-sm-12 col-md-8">
            ©2014 HangZhou ShiHe Network Technology Co.Ltd. <?php echo (isset($system['icp_certificate']) && ($system['icp_certificate'] !== '')?$system['icp_certificate']:""); ?><br> 
            地址:<?php echo $system['address']; ?>
          </div>
          <div class="col-xs-12 col-md-4 js">
            <?php echo $system['site_name']; ?> <br> 技术支持：www.hzshihe.cn
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 浮动客服 -->
  <div id="kefu" class="visible-md-block visible-lg-block">
    <div class="keifu_box">
      <div class="qq"><a target="_blank" href="tencent://message/?uin=3391648175&Site=&Menu=yes"><img src="__PUBLIC__/images/qq.png" title="在线客服" /></a></div> 
      <div class="qq"><a target="_blank" href="tencent://message/?uin=3391648175&Site=&Menu=yes"><img src="__PUBLIC__/images/qq.png" title="在线留言"/></a></div>
    </div>
  </div>

</body>

<script type="text/javascript">
  <?php echo (isset($system['code']) && ($system['code'] !== '')?$system['code']:""); ?>
</script>
<script>
$(function(){
  var flag=0;
  $('#rightArrow').on("click",function(){
    if(flag==1){
      $("#floatDivBoxs").animate({right: '-175px'},300);
      $(this).animate({right: '-5px'},300);
      $(this).css('background-position','-50px 0');
      flag=0;
    }else{
      $("#floatDivBoxs").animate({right: '0'},300);
      $(this).animate({right: '170px'},300);
      $(this).css('background-position','0px 0');
      flag=1;
    }
  });
});
</script>

<script>
  var kefu = {};
    kefu._x;
    kefu._y;
    kefu.moveBox = $('#kefu'); //整体悬浮框
    kefu.drag = $('#kefu .move'); //可拖动部分
    kefu.defaultTop = (window.screen.height - kefu.moveBox.height())/2 - 200; //默认顶部保持上下居中，再往上去200像素
  $(window).scroll(function(){
    var offsetTop = kefu.defaultTop + $(window).scrollTop()+'px';
    kefu.moveBox.animate({top:offsetTop},{
      duration: 600,
        queue: false
      });
  });

</script>
</html>