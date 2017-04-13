<?php
namespace app\index_en\controller;

use think\Db;

/**
* 新闻中心
*/
class News extends Base
{
    //新闻中心首页
    public function index()
    {
        //查询新闻中心banner图
        $news_img = Db::name('image')->where('title','新闻中心banner')->field('url,title')->find();

        //查询公司新闻
        $news = Db::name('news_en')->where('classify','3')->where('status','1')->paginate(5);

        //发送数据
        $this->assign('news_img',$news_img);
        $this->assign('news',$news);
        return view('news/index');
    }

    //行业新闻
    public function index_hy()
    {
        //查询新闻中心banner图
        $news_img = Db::name('image')->where('title','新闻中心banner')->field('url,title')->find();

        //查询公司新闻
        $news = Db::name('news_en')->where('classify','4')->where('status','1')->paginate(5);

        //发送数据
        $this->assign('news_img',$news_img);
        $this->assign('news',$news);
        return view('news/index_hy');
    }

    //新闻详情页
    public function detail($id)
    {
        //查询新闻表
        $news = Db::name('news_en')->where('id',$id)->find();

        //查询文章相关关键词
        $keywords = explode(',',$news['keywords']);

        //查询相关文章
        $num = Db::name('news_en')->count('id');
        $cor = '';
        for ($i=0; $i < $num-1; $i++) {
            if ($num >= 5) {
                break;
            }
            $n = mt_rand(1,$num);
            $cor[] = Db::name('news_en')->where('id',$n)->find();
        }

        //查询上一篇文章
        $up = Db::name('news_en')->where('id',$id-1)->field('id,title')->find();

        //查询下一篇文章
        $down = Db::name('news_en')->where('id',$id+1)->field('id,title')->find();

        //发送数据
        $this->assign('news',$news);
        $this->assign('keywords',$keywords);
        $this->assign('cor',$cor);
        $this->assign('up',$up);
        $this->assign('down',$down);
        return view('news/detail');
    }
}