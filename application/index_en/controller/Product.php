<?php
namespace app\index_en\controller;

use think\Db;

/**
* 产品中心
*/
class Product extends Base
{
    //产品中心
    public function index()
    {
        //查询产品中心banner
        $p_img = Db::name('image')->where('title','产品中心banner')->field('url,title')->find();

        //查询产品分类
        $classify = Db::name('category')->where('pid','1')->select();

        //查询产品信息
        $product = Db::name('product_en')->paginate(12);

        //发送数据
        $this->assign('p_img',$p_img);
        $this->assign('classify',$classify);
        $this->assign('product',$product);
        return view('product/index');
    }

    //产品分类
    public function lst($cid)
    {
        //查询产品中心banner
        $p_img = Db::name('image')->where('title','产品中心banner')->field('url,title')->find();

        //查询产品分类
        $classify = Db::name('category')->where('pid','1')->select();

        //查询产品信息
        $product = Db::name('product_en')->where('classify',$cid)->paginate(12);

        //发送数据
        $this->assign('p_img',$p_img);
        $this->assign('classify',$classify);
        $this->assign('product',$product);
        $this->assign('cid',$cid);
        return view('product/lst');
    }

    //产品详情
    public function detail($id)
    {
        //查询产品中心banner
        $p_img = Db::name('image')->where('title','产品中心banner')->field('url,title')->find();

        //查询产品详细信息
        $product = Db::name('product_en')->where('id',$id)->find();
        $product['content'] = html_entity_decode($product['content']);
        //发送数据
        $this->assign('p_img',$p_img);
        $this->assign('product',$product);
        return view('product/detail');
    }
}