<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [

    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__PUBLIC__'=>SITE_URL.'/static/index',
        '__IMAGE__'=>SITE_URL,
    ],

    // 404错误页面
    'http_exception_template' => [
        // 定义404错误的重定向页面地址
        404 => APP_PATH.'/index/view/404.html',
        // 还可以定义其它的HTTP status
        401 => APP_PATH.'/index/view/401.html',
    ],
];
