<?php
namespace app\index_en\controller;

use think\Db;

/**
 * 首页
 */
class Index extends Base
{
    public function index()
    {
        //查询轮播图
        $banner = Db::name('banner')->where('status','1')->order('rank','desc')->select();

        //查询首页产品展示
        $product = Db::name('image_en')->where('title','首页产品')->find();
        $description = explode(',',$product['description']);
        $re = $description[0];
        unset($description[0]);
        array_push($description,$re);

        //查询首页关于华豫
        $about = Db::name('image_en')->where('title','首页关于华豫')->find();
        //处理关于华豫描述
        $des = explode('*',$about['description']);

        //查询首页新闻
        $news_img = Db::name('image_en')->where('title','首页新闻')->field('url')->find();
        $news = Db::name('news_en')->where('status','1')->order('createtime','desc')->limit(5)->select();

        //发送数据
        $this->assign('product',$product);
        $this->assign('banner',$banner);
        $this->assign('description',$description);
        $this->assign('about',$about);
        $this->assign('des',$des);
        $this->assign('news_img',$news_img);
        $this->assign('news',$news);
        return view('Index/index');
    }
}
