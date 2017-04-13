<?php
namespace app\index_en\controller;

use think\Db;

/**
* 关于我们
*/
class Aboutus extends Base
{
    public function index()
    {
        //查询广告位banner图
        $ab_img = Db::name('image')->where('title','关于华豫banner')->field('url,title')->find();

        //发送数据
        $this->assign('ab_img',$ab_img);
        return view('aboutus/aboutus');
    }
}