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
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    'index' => ['index/Index/index',['method' => 'get|post']],
    'aboutus' => ['index/aboutus/index',['method' => 'get|post']],
    'contact' => ['index/contact/index',['method' => 'get|post']],
    'product' => ['index/product/index',['method' => 'get|post']],
    'pro_lst/[:cid]' => ['index/product/lst',['method' => 'get|post']],
    'pro_detail/[:id]' => ['index/product/detail',['method' => 'get|post']],
    'news' => ['index/news/index',['method' => 'get|post']],
    'news_hy' => ['index/news/index_hy',['method' => 'get|post']],
    'news_detail/[:id]' => ['index/news/detail',['method' => 'get|post']],
    'index_en' => ['index_en/index/index',['method' => 'get|post']],
    'aboutus_en' => ['index_en/aboutus/index',['method' => 'get|post']],
    'contact_en' => ['index_en/contact/index',['method' => 'get|post']],
    'product_en' => ['index_en/product/index',['method' => 'get|post']],
    'pro_lst_en/[:cid]' => ['index_en/product/lst',['method' => 'get|post']],
    'pro_detail_en/[:id]' => ['index_en/product/detail',['method' => 'get|post']],
    'news_en' => ['index_en/news/index',['method' => 'get|post']],
    'news_hy_en' => ['index_en/news/index_hy',['method' => 'get|post']],
    'news_detail_en/[:id]' => ['index_en/news/detail',['method' => 'get|post']],
    'leave' => ['index/Contact/leave',['method' => 'get|post']],
    'leave_en' => ['index_en/Contact/leave',['method' => 'get|post']],

];
