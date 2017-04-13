<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

/**
* 基础继承基类
*/
class Base extends Controller
{
    //初始化方法
    public function _initialize()
    {
        //查询系统设置
        $sys = Db::name('system')->order('id','desc')->find();

        //查询微信二维码
        $wem = Db::name('image')->where('title','微信二维码')->field('url,title')->find();

        $link = Db::name('link')->where('status','1')->order('sort','desc')->select();  //查询友情链接

        //数据发送
        $this->assign(array(
            'wem' => $wem,
            'system' => $sys,
            'link' => $link
        ));
    }
}