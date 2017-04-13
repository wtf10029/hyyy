<?php
namespace app\index_en\controller;

use think\Db;

/**
* 联系我们
*/
class Contact extends Base
{
    //联系我们
    public function index()
    {
        //查询联系我们banner
        $co_img = Db::name('image')->where('title','联系我们banner')->field('url,title')->find();

        //查询微信二维码
        $we = Db::name('image')->where('title','微信二维码')->field('url,title')->find();

        //发送数据
        $this->assign('co_img',$co_img);
        $this->assign('we',$we);
        return view('contact/index');
    }

    //留言
    public function leave()
    {
        $data = input('post.');
        $data['createtime'] = time();

        //存入留言数据库
        $res = Db::name('leave')->insert($data);

        if ($res) {
            $this->success('留言成功!');
        } else {
            $this->error('留言失败!');
        }
        
    }
}