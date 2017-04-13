# Host: localhost  (Version: 5.5.53)
# Date: 2016-12-30 18:29:17
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "sh_admin"
#

CREATE TABLE `sh_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL COMMENT '用户登录id',
  `password` char(32) NOT NULL COMMENT '登陆密码',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `loginip` varchar(15) NOT NULL COMMENT '登陆ip',
  `logintime` int(10) unsigned NOT NULL DEFAULT '1465164366' COMMENT '登陆时间',
  `status` smallint(1) unsigned NOT NULL DEFAULT '1' COMMENT '用户状态,1:正常,2:冻结',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "sh_admin"
#

INSERT INTO `sh_admin` VALUES (1,'admin','e974ebdf4080ceb601963a76e08b8156','admin@hzshihe.com','127.0.0.1',1482916206,1);

#
# Structure for table "sh_admin_role"
#

CREATE TABLE `sh_admin_role` (
  `aid` int(11) unsigned NOT NULL COMMENT '用户id',
  `rid` int(11) unsigned NOT NULL COMMENT '角色id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_admin_role"
#

INSERT INTO `sh_admin_role` VALUES (1,1),(6,2),(7,2),(8,2),(9,2),(23,3),(11,3),(12,3),(13,3),(17,2),(29,2),(26,2),(25,2),(31,2),(33,2);

#
# Structure for table "sh_banner"
#

CREATE TABLE `sh_banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classify` int(10) unsigned NOT NULL COMMENT 'banner分类',
  `title` varchar(255) NOT NULL COMMENT 'banner标题',
  `description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
  `link` varchar(255) DEFAULT NULL COMMENT 'banner连接地址',
  `path` varchar(255) NOT NULL COMMENT 'banner图片路径',
  `rank` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'banner排序',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `size` varchar(255) NOT NULL COMMENT 'banner尺寸',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `imagename` varchar(255) NOT NULL COMMENT 'banner名字',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:显示 2:不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "sh_banner"
#

INSERT INTO `sh_banner` VALUES (1,7,'第一张轮播图','第一张轮播图','','uploads/banner/148271734913.jpeg',100,1482717349,'1920*500','admin','148271734913.jpeg',1),(2,7,'第二张轮播图','第二张轮播图','','uploads/banner/148288897848.jpeg',99,1482888978,'1920*500','admin','148288897848.jpeg',1);

#
# Structure for table "sh_banner_en"
#

CREATE TABLE `sh_banner_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classify` int(10) unsigned NOT NULL COMMENT 'banner分类',
  `title` varchar(255) NOT NULL COMMENT 'banner标题',
  `description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
  `link` varchar(255) DEFAULT NULL COMMENT 'banner连接地址',
  `path` varchar(255) NOT NULL COMMENT 'banner图片路径',
  `rank` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'banner排序',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `size` varchar(255) NOT NULL COMMENT 'banner尺寸',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `imagename` varchar(255) NOT NULL COMMENT 'banner名字',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:显示 2:不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_banner_en"
#


#
# Structure for table "sh_category"
#

CREATE TABLE `sh_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catename` varchar(255) NOT NULL COMMENT '分类名称',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  `title` varchar(255) DEFAULT NULL COMMENT '栏目标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '栏目关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '栏目描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_category"
#

INSERT INTO `sh_category` VALUES (1,'产品中心',0,'产品中心','产品中心','产品中心'),(2,'新闻中心',0,'新闻中心','新闻中心','新闻中心'),(3,'公司新闻',2,'公司新闻','公司新闻','公司新闻'),(4,'行业新闻',2,'行业新闻','行业新闻','行业新闻'),(5,'创伤修复',1,'Repair','创伤修复','创伤修复'),(6,'轮播图',0,'轮播图','轮播图','轮播图'),(7,'首页banner',6,'首页banner','首页banner','首页banner'),(8,'广告位',0,'广告位','广告位','广告位'),(9,'首页图',8,'首页','首页','首页'),(10,'二维码',8,'二维码','二维码','二维码'),(18,'关于华豫',8,'关于华豫','关于华豫','关于华豫'),(19,'产品中心',8,'产品中心','产品中心','产品中心'),(20,'新闻中心',8,'新闻中心','新闻中心','新闻中心'),(21,'联系我们',8,'联系我们','联系我们','联系我们');

#
# Structure for table "sh_image"
#

CREATE TABLE `sh_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '图片名称',
  `classify` varchar(20) NOT NULL COMMENT '图片分类',
  `title` varchar(20) DEFAULT NULL COMMENT '图片标题',
  `description` varchar(1000) DEFAULT NULL COMMENT '图片描述',
  `url` varchar(255) NOT NULL COMMENT '原图片路径',
  `type` varchar(10) NOT NULL COMMENT '图片后缀',
  `size` varchar(10) NOT NULL COMMENT '图片尺寸',
  `lst_img` varchar(255) NOT NULL COMMENT '列表页图片路径',
  `thumb_img` varchar(255) NOT NULL COMMENT '编辑页缩略图路径',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_image"
#

INSERT INTO `sh_image` VALUES (1,'72478.jpeg','9','首页产品','抗过敏,创面保护,长效杀菌,防腐去污,创面修复,控渗出消水肿','uploads/images/master/72478.jpeg','jpeg','371x246','uploads/images/list/72478.jpeg','uploads/images/thumb/72478.jpeg',1482915495),(2,'7de7b.jpeg','9','首页关于华豫','杭州华豫医药科技有限公司是一家致力于医疗高科技产品研发，生产和推广的公司。公司积极引进国际上高新技术的设备和耗材。同时积极投资医用高新设备，耗材和药品的研发生产。公司目前主要经营骨科，外科，妇产科，急诊科等科室的耗材和设备，业务目前覆盖整个浙江省。*杭州华豫医药科技有限公司以“让人人享有健康”为企业目标。秉承以“人为本”的用人理念，用心尊重每一位合作伙伴，以期达到双赢。以市场为中心，不为市场服务的员工一个不要，不为市场服务的机构一个不设。创新务实，追求卓越。提倡正直诚实，敢于创新，勇于负责的职业精神。主张“客户利益第一，员工利益第二，老板利益第三”的利益分配原则。','uploads/images/master/7de7b.jpeg','jpeg','480x300','uploads/images/list/7de7b.jpeg','uploads/images/thumb/7de7b.jpeg',1482724103),(3,'23718.jpeg','9','首页新闻','首页新闻','uploads/images/master/23718.jpeg','jpeg','308x207','uploads/images/list/23718.jpeg','uploads/images/thumb/23718.jpeg',1482725255),(4,'21f6c.jpeg','18','关于华豫banner','关于华豫banner','uploads/images/master/21f6c.jpeg','jpeg','1920x421','uploads/images/list/21f6c.jpeg','uploads/images/thumb/21f6c.jpeg',1482732561),(5,'3544e.jpeg','21','联系我们banner','联系我们banner','uploads/images/master/3544e.jpeg','jpeg','1920x423','uploads/images/list/3544e.jpeg','uploads/images/thumb/3544e.jpeg',1482733621),(6,'e5096.jpeg','10','微信二维码','微信二维码','uploads/images/master/e5096.jpeg','jpeg','82x82','uploads/images/list/e5096.jpeg','uploads/images/thumb/e5096.jpeg',1482734887),(7,'303fb.jpeg','20','新闻中心banner','新闻中心banner','uploads/images/master/303fb.jpeg','jpeg','1920x422','uploads/images/list/303fb.jpeg','uploads/images/thumb/303fb.jpeg',1482751407),(8,'ee712.jpeg','19','产品中心banner','产品中心banner','uploads/images/master/ee712.jpeg','jpeg','1920x423','uploads/images/list/ee712.jpeg','uploads/images/thumb/ee712.jpeg',1482751449);

#
# Structure for table "sh_image_en"
#

CREATE TABLE `sh_image_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '图片名称',
  `classify` varchar(20) NOT NULL COMMENT '图片分类',
  `title` varchar(20) DEFAULT NULL COMMENT '图片标题',
  `description` varchar(1000) DEFAULT NULL COMMENT '图片描述',
  `url` varchar(255) NOT NULL COMMENT '原图片路径',
  `type` varchar(10) NOT NULL COMMENT '图片后缀',
  `size` varchar(10) NOT NULL COMMENT '图片尺寸',
  `lst_img` varchar(255) NOT NULL COMMENT '列表页图片路径',
  `thumb_img` varchar(255) NOT NULL COMMENT '编辑页缩略图路径',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_image_en"
#

INSERT INTO `sh_image_en` VALUES (1,'88efa.jpeg','9','首页产品','protection,sterilization,decontamination,repair,detumescence,anti-allergic','uploads/images/master/88efa.jpeg','jpeg','371x246','uploads/images/list/88efa.jpeg','uploads/images/thumb/88efa.jpeg',1482907586),(2,'08401.jpeg','9','首页关于华豫','Hangzhou hua yu pharmaceutical technology co., LTD. Is a company dedicated to medical high-tech product research and development, production and marketing of the company. Company actively introduces international high-tech equipment and consumables. High-tech medical active devices at the same time, consumables and drug research and development production. The company is mainly engaged in orthopedic surgery, obstetrics and gynecology, emergency department and other departments of supplies and equipment, the business covers the whole zhejiang province at present.','uploads/images/master/08401.jpeg','jpeg','480x300','uploads/images/list/08401.jpeg','uploads/images/thumb/08401.jpeg',1482908016),(3,'634e9.jpeg','9','首页新闻','首页新闻','uploads/images/master/634e9.jpeg','jpeg','308x207','uploads/images/list/634e9.jpeg','uploads/images/thumb/634e9.jpeg',1482908252);

#
# Structure for table "sh_leave"
#

CREATE TABLE `sh_leave` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '用户姓名',
  `contact` varchar(255) NOT NULL COMMENT '联系方式',
  `theme` varchar(255) DEFAULT NULL COMMENT '主题',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_leave"
#


#
# Structure for table "sh_news"
#

CREATE TABLE `sh_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `classify` varchar(20) NOT NULL COMMENT '新闻分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '新闻缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '新闻关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '新闻描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "sh_news"
#

INSERT INTO `sh_news` VALUES (1,'浙江十大最美乡村”评选进行中','<p style=\"text-align: center;\"><span style=\"font-size: 24px;\"><strong>浙江十大最美乡村”评选进行中</strong></span></p><p><span style=\"font-size: 14px;\">北京2016年12月1日电 /美通社/ -- 由凤凰网和浙江省旅游局联合主办的“诗画浙江.美丽乡村 -- \r\n浙江十大最美乡村”评选活动正式拉开帷幕。此次评选由专注极致旅行体验的第一旅游门户凤凰旅游（travel.ifeng.com）发起，获得浙江百余座乡村积极报名响应，经过十位权威乡村文化领域学者专家初选，共有50个乡村入围公众评选。2016年11月9日起至12月9日评选进入公众评选阶段，得票最高的十个乡村将获得“浙江十大最美乡村”称号。此次评选上线两周获得50万网友参与，参与此次投票的网友，将有机会获得一份神秘大礼包。</span></p><p style=\"text-align: center;\"><span style=\"font-size: 14px;\"><img src=\"http://hyyy.com/ueditor/upload/image/20161226/1482728023664152.jpg\" title=\"1482728023664152.jpg\" alt=\"产品.jpg\" width=\"268\" height=\"334\"/></span></p>','3','浙江十大最美乡村”评选进行中','网络','uploads/thumb/148272804074.jpeg',123,1482728040,'浙江,最美乡村','北京2016年12月1日电 /美通社/ -- 由凤凰网和浙江省旅游局联合主办的“诗画浙江.美丽乡村 -- 浙江十大最美乡村”评选活动正式拉开帷幕','admin',1,'148272804074.jpeg');

#
# Structure for table "sh_news_en"
#

CREATE TABLE `sh_news_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `classify` varchar(20) NOT NULL COMMENT '新闻分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '新闻缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '新闻关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '新闻描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "sh_news_en"
#

INSERT INTO `sh_news_en` VALUES (1,'About China\'s pharmaceutical','<p><span style=\"font-family: 微软雅黑; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none; color: rgb(0, 0, 0);\">About China&#39;s pharmaceutical industry research institute China&#39;s pharmaceutical industry research institute (hereinafter referred to as the &quot;medical professionals institute&quot;) is China&#39;s pharmaceutical industry of scientific research courtyard and technology innovation base, the main business for innovative drugs and technology research and development, pharmaceutical production, sales, and graduate education in pharmaceutical field. At present, the medical professionals institute has already formed the board of directors, management, subordinates, three-level governance structure of enterprises and research and development, industry, and the development pattern of graduate student education, has five research and development institutions, four national center, 1 national key laboratory, three industrial enterprises, college of pharmacy 1 and 3 of this journal.</span><br/></p>','3','About China\'s pharmaceutical','网络','uploads/thumb/148291090993.jpeg',123,1482910909,'About China\'s pharmaceutical','About China\'s pharmaceutical','admin',1,'148291090993.jpeg');

#
# Structure for table "sh_node"
#

CREATE TABLE `sh_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '节点名',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_node"
#

INSERT INTO `sh_node` VALUES (1,'用户管理'),(2,'分类管理'),(3,'权限管理'),(4,'回收站'),(5,'产品中心'),(6,'新闻中心'),(7,'轮播图'),(8,'广告位'),(9,'留言管理'),(10,'系统管理');

#
# Structure for table "sh_product"
#

CREATE TABLE `sh_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '产品标题',
  `content` text NOT NULL COMMENT '产品内容',
  `classify` varchar(20) NOT NULL COMMENT '产品分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '产品缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '产品关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '产品描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "sh_product"
#

INSERT INTO `sh_product` VALUES (1,'立见护创液','<p><span style=\"color: rgb(0, 0, 0);\"><span style=\"font-size: 24px;\"></span><span style=\"font-size: 24px;\"><strong>产品基本信息</strong></span></span></p><p><span style=\"color: rgb(0, 0, 0);\">产品名：创面护理功能性敷料</span></p><p><span style=\"color: rgb(0, 0, 0);\">规格：10ML、30ML</span></p><p><span style=\"color: rgb(0, 0, 0);\">商品名：立见护创液</span></p><p><span style=\"color: rgb(0, 0, 0);\">主要成分：维生素C（抗坏血酸）、四硼酸钠、丙二醇、纯水、辅料</span></p><p><span style=\"color: rgb(0, 0, 0);\">化学分子式及分子量：803.81</span></p><p><span style=\"color: rgb(0, 0, 0);\">剂型：液相型，低分子分散体系，可吸收生物材料</span></p><p><span style=\"color: rgb(0, 0, 0);\">质量标准：淡黄色澄清透明液体，PH：5.4—6.0（±1）</span></p><p><span style=\"color: rgb(0, 0, 0);\">分子密度：1.12—1.15</span></p><p><span style=\"color: rgb(0, 0, 0);\">产品注册证号：渝食药监械（准）字2014第2640104号<span style=\"color: rgb(0, 0, 0); font-size: 24px;\"><strong><br/></strong></span><br/></span></p><p><img src=\"http://hyyy.com/ueditor/upload/image/20161226/1482751871361768.jpg\" title=\"1482751871361768.jpg\" alt=\"首页展示图.jpg\" width=\"263\" height=\"197\"/></p><p><span style=\"color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 0); font-size: 16px;\"></span><span style=\"font-size: 24px; color: rgb(0, 0, 0);\"><strong>视频介绍</strong></span></span></p><p><span style=\"font-size: 24px; color: rgb(0, 0, 0);\"><strong><embed type=\"application/x-shockwave-flash\" class=\"edui-faked-video\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" src=\"http://player.youku.com/player.php/sid/XMTg4NjAxOTk2OA==/v.swf\" width=\"400\" height=\"300\" wmode=\"transparent\" play=\"true\" loop=\"false\" menu=\"false\" allowscriptaccess=\"never\" allowfullscreen=\"true\"/></strong></span></p><p><span style=\"font-size: 24px; color: rgb(0, 0, 0);\"><br/></span></p><p><span style=\"font-size: 24px; color: rgb(0, 0, 0);\"><strong>用途规范</strong></span></p><p><span style=\"color: rgb(0, 0, 0);\">各类外科、内分泌、烧烫伤、皮肤科等凡是与皮肤损伤有关的科室。也可以作为家庭药箱常备品,适用于创面的各个分期,可以说是作用非常全面。</span></p><p><br/></p><p><span style=\"font-size: 24px; color: rgb(0, 0, 0);\"><strong>功能特点</strong></span></p><p><img src=\"http://hyyy.com/ueditor/upload/image/20161226/1482751980569310.jpg\" title=\"1482751980569310.jpg\" alt=\"QQ截图20161226193242.jpg\"/></p><p><span style=\"color: rgb(0, 0, 0);\">&nbsp; &nbsp;杭州华豫医药科技有限公司是一家致力于医疗高科技产品研发，生产和推广的公司。公司积极引进国际上高新技术的设备和耗材。同时积极投资医用高新设备，耗材和药品的研发生产。公司目前主要经营骨科，外科，妇产科，急诊科等科室的耗材和设备，业务目前覆盖整个浙江省。 &nbsp; &nbsp;杭州华豫医药科技有限公司以“让人人享有健康”为企业目标。秉承以“人为本”的用人理念，用心尊重每一位合作伙伴，以期达到双赢。以市场为中心，不为市场服务的员工一个不要，不为市场服务的机构一个不设。创新务实，追求卓越。提倡正直诚实，敢于创新，勇于负责的职业精神。主张“客户利益第一，员工利益第二，老板利益第三”的利益分配原则。</span></p><p><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp; &nbsp;&nbsp;</span></p><p><br/></p>','5','立见护创液','公司','uploads/thumb/148275204631.jpeg',50,1482830384,'立见护创液','立见护创液','admin',1,'148275204631.jpeg');

#
# Structure for table "sh_product_en"
#

CREATE TABLE `sh_product_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '产品标题',
  `content` text NOT NULL COMMENT '产品内容',
  `classify` varchar(20) NOT NULL COMMENT '产品分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '产品缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '产品关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '产品描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "sh_product_en"
#

INSERT INTO `sh_product_en` VALUES (1,'LIJIANHUCHUANGYE','<p><span style=\"font-size: 24px;\"><strong><span style=\"color: rgb(0, 0, 0);\">Basic Product Information</span></strong></span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">191/5000 Product Name: Wound Care Functional Dressing</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Specifications: 10ML, 30ML</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Product Name: lijianchuanghuye</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Main ingredients: Vitamin C (ascorbic acid), sodium tetraborate, propylene glycol, pure water, accessories</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Chemical formula and molecular weight: 803.81</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Formulation: liquid type, low molecular dispersion system, can absorb biological materials</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Quality standard: light yellow clear and transparent liquid, PH: 5.4-6.0 (± 1)</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Molecular density: 1.12-1.15</span></p><p style=\"font-family: 微软雅黑; text-decoration: none !important; box-sizing: border-box; margin: 0px 0px 10px; color: rgb(153, 153, 153); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><span style=\"color: rgb(0, 0, 0);\">Product Registration No .: Yu Food and Drug Administration armed (quasi) word 2014 No. 2640104</span></p><p><img src=\"http://hyyy.com/ueditor/upload/image/20161228/1482909590242957.jpg\" title=\"1482909590242957.jpg\" alt=\"首页展示图.jpg\" width=\"298\" height=\"206\"/></p><p><span style=\"font-size: 24px;\"><strong><span style=\"font-family: 微软雅黑; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none; color: rgb(0, 0, 0);\">Video introduction</span></strong></span></p><p><embed type=\"application/x-shockwave-flash\" class=\"edui-faked-video\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" src=\"http://player.youku.com/player.php/sid/XMTg4NjAxOTk2OA==/v.swf\" width=\"400\" height=\"300\" wmode=\"transparent\" play=\"true\" loop=\"false\" menu=\"false\" allowscriptaccess=\"never\" allowfullscreen=\"true\"/></p><p><span style=\"font-size: 24px;\"><strong><span style=\"color: rgb(0, 0, 0);\">Use standard</span></strong></span></p><p><span style=\"color: rgb(0, 0, 0);\">All kinds of surgery, endocrine, burns, skin, etc all departments related to the skin damage. Can also be used as a family medicine cabinet staple Applicable to wound of each installment, can saying is very comprehensive.</span></p><p><span style=\"font-size: 24px;\"><strong><span style=\"font-family: 微软雅黑; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none; color: rgb(0, 0, 0);\">Functional features</span></strong></span></p><p><img src=\"http://hyyy.com/ueditor/upload/image/20161228/1482909722151471.jpg\" title=\"1482909722151471.jpg\" alt=\"QQ截图20161228152150.jpg\"/></p><p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 28px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline ! important; float: none;\">Hangzhou hua yu pharmaceutical technology co., LTD. Is a company dedicated to medical high-tech product research and development, production and marketing of the company. Company actively introduces international high-tech equipment and consumables. High-tech medical active devices at the same time, consumables and drug research and development production. The company is mainly engaged in orthopedic surgery, obstetrics and gynecology, emergency department and other departments of supplies and equipment, the business covers the whole zhejiang province at present. Hangzhou hua yu pharmaceutical technology co., LTD. In order to &quot;let everybody enjoys health&quot; as the goal of enterprise. Adhering to the &quot;people-oriented&quot; concept of choose and employ persons, the heart respect each partner, in order to achieve a win-win situation. Take the market as the center, not for the market service staff a don&#39;t, not to serve the market institutions a set. Pragmatic innovation, the pursuit of excellence. Advocating integrity, innovation, dares to responsible professionalism. &quot;Clients&#39; interests first, employee interests second, boss the interests of the third&quot; principles of profit distribution.<br/></span></p>','5','LIJIANHUCHUANGYE','公司','uploads/thumb/148290983522.jpeg',100,1482909835,'LIJIANHUCHUANGYE','LIJIANHUCHUANGYE','admin',1,'148290983522.jpeg');

#
# Structure for table "sh_recycle_admin"
#

CREATE TABLE `sh_recycle_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '用户密码',
  `email` varchar(50) NOT NULL COMMENT '用户邮箱',
  `loginip` varchar(15) NOT NULL COMMENT '登陆ip',
  `logintime` int(10) unsigned NOT NULL COMMENT '登陆时间',
  `rid` int(11) unsigned NOT NULL COMMENT '用户角色id',
  `status` int(10) unsigned NOT NULL COMMENT '用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_admin"
#


#
# Structure for table "sh_recycle_banner"
#

CREATE TABLE `sh_recycle_banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classify` int(10) unsigned NOT NULL COMMENT 'banner分类',
  `title` varchar(255) NOT NULL COMMENT 'banner标题',
  `description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
  `link` varchar(255) DEFAULT NULL COMMENT 'banner连接地址',
  `path` varchar(255) NOT NULL COMMENT 'banner图片路径',
  `rank` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'banner排序',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `size` varchar(255) NOT NULL COMMENT 'banner尺寸',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `imagename` varchar(255) NOT NULL COMMENT 'banner名字',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:显示 2:不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_banner"
#


#
# Structure for table "sh_recycle_banner_en"
#

CREATE TABLE `sh_recycle_banner_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `classify` int(10) unsigned NOT NULL COMMENT 'banner分类',
  `title` varchar(255) NOT NULL COMMENT 'banner标题',
  `description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
  `link` varchar(255) DEFAULT NULL COMMENT 'banner连接地址',
  `path` varchar(255) NOT NULL COMMENT 'banner图片路径',
  `rank` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'banner排序',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `size` varchar(255) NOT NULL COMMENT 'banner尺寸',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `imagename` varchar(255) NOT NULL COMMENT 'banner名字',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:显示 2:不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_banner_en"
#


#
# Structure for table "sh_recycle_image"
#

CREATE TABLE `sh_recycle_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '图片名称',
  `classify` varchar(20) NOT NULL COMMENT '图片分类',
  `title` varchar(20) DEFAULT NULL COMMENT '图片标题',
  `description` varchar(40) DEFAULT NULL COMMENT '图片描述',
  `url` varchar(255) NOT NULL COMMENT '图片路径',
  `type` varchar(10) NOT NULL COMMENT '图片后缀',
  `size` varchar(10) NOT NULL COMMENT '图片尺寸',
  `lst_img` varchar(255) NOT NULL COMMENT '列表页图片路径',
  `thumb_img` varchar(255) NOT NULL COMMENT '编辑页图片路径',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_recycle_image"
#


#
# Structure for table "sh_recycle_image_en"
#

CREATE TABLE `sh_recycle_image_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '图片名称',
  `classify` varchar(20) NOT NULL COMMENT '图片分类',
  `title` varchar(20) DEFAULT NULL COMMENT '图片标题',
  `description` varchar(40) DEFAULT NULL COMMENT '图片描述',
  `url` varchar(255) NOT NULL COMMENT '图片路径',
  `type` varchar(10) NOT NULL COMMENT '图片后缀',
  `size` varchar(10) NOT NULL COMMENT '图片尺寸',
  `lst_img` varchar(255) NOT NULL COMMENT '列表页图片路径',
  `thumb_img` varchar(255) NOT NULL COMMENT '编辑页图片路径',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_recycle_image_en"
#


#
# Structure for table "sh_recycle_news"
#

CREATE TABLE `sh_recycle_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `classify` varchar(20) NOT NULL COMMENT '新闻分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '新闻缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '新闻关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '新闻描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_news"
#


#
# Structure for table "sh_recycle_news_en"
#

CREATE TABLE `sh_recycle_news_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `classify` varchar(20) NOT NULL COMMENT '新闻分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '新闻缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '新闻关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '新闻描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_news_en"
#


#
# Structure for table "sh_recycle_product"
#

CREATE TABLE `sh_recycle_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '产品标题',
  `content` text NOT NULL COMMENT '产品内容',
  `classify` varchar(20) NOT NULL COMMENT '产品分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '产品缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '产品关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '产品描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_product"
#


#
# Structure for table "sh_recycle_product_en"
#

CREATE TABLE `sh_recycle_product_en` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL COMMENT '产品标题',
  `content` text NOT NULL COMMENT '产品内容',
  `classify` varchar(20) NOT NULL COMMENT '产品分类',
  `tag` varchar(255) DEFAULT NULL COMMENT 'tag标签',
  `source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `thumbnail` varchar(255) NOT NULL COMMENT '产品缩略图',
  `bro_num` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '浏览次数',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `keywords` varchar(255) DEFAULT NULL COMMENT '产品关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '产品描述',
  `user` varchar(255) NOT NULL COMMENT '发布者',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '1.显示状态 2.不显示状态',
  `thumb_name` varchar(255) NOT NULL COMMENT '缩略图名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "sh_recycle_product_en"
#


#
# Structure for table "sh_role"
#

CREATE TABLE `sh_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '角色名',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_role"
#

INSERT INTO `sh_role` VALUES (1,'超级管理员'),(2,'普通管理员'),(3,'消息发布员');

#
# Structure for table "sh_role_node"
#

CREATE TABLE `sh_role_node` (
  `rid` int(11) unsigned NOT NULL COMMENT '角色id',
  `nid` int(11) unsigned NOT NULL COMMENT '节点id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_role_node"
#

INSERT INTO `sh_role_node` VALUES (1,6),(1,5),(1,4),(1,3),(1,2),(1,1),(2,9),(2,8),(2,7),(2,6),(1,8),(1,7),(3,8),(3,7),(1,9),(2,5),(2,4),(2,2),(3,6),(3,5),(3,2),(1,10),(2,10),(3,9);

#
# Structure for table "sh_system"
#

CREATE TABLE `sh_system` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(20) DEFAULT NULL COMMENT '网站名称',
  `seo_title` varchar(40) DEFAULT NULL COMMENT 'seo标题',
  `seo_keywords` varchar(40) DEFAULT NULL COMMENT 'seo关键词',
  `seo_description` varchar(80) DEFAULT NULL COMMENT 'seo描述',
  `icp_certificate` varchar(40) DEFAULT NULL COMMENT 'icp证书号',
  `code` varchar(255) DEFAULT NULL COMMENT '统计代码',
  `modify_time` int(10) unsigned NOT NULL COMMENT '修改时间',
  `user` varchar(255) NOT NULL COMMENT '修改者',
  `domain` varchar(255) NOT NULL COMMENT '站点域名',
  `qq` varchar(255) DEFAULT NULL COMMENT 'QQ号码',
  `tel` varchar(255) DEFAULT NULL COMMENT '固定电话',
  `phone` varchar(255) DEFAULT NULL COMMENT '手机',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `fax` varchar(255) DEFAULT NULL COMMENT '传真',
  `weichat` varchar(255) DEFAULT NULL COMMENT '微信',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "sh_system"
#

INSERT INTO `sh_system` VALUES (1,'杭州华豫医药科技有限公司','','','','','',1482718982,'admin','http://127.0.0.1','','0571-86790883','','','杭州市莫干山路1418-66号2幢8层804室',NULL,NULL),(2,'杭州华豫医药科技有限公司','','','','','',1482731849,'admin','http://127.0.0.1','3391648175','0571-86790883','13306819269','3391648175@qq.com','杭州市莫干山路1418-66号2幢8层804室',NULL,NULL),(3,'杭州华豫医药科技有限公司','','','','','',1482734639,'admin','http://127.0.0.1','3391648175','0571-86790883','13306819269','3391648175@qq.com','杭州市莫干山路1418-66号2幢8层804室','0571-86790893','hzhuayuyiyao');
