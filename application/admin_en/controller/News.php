<?php
namespace app\admin_en\controller;

use think\Db;

/**
* 新闻中心
*/
class News extends Base
{
    //新闻中心列表
    public function lst()
    {
        //查询新闻表
        $res = Db::name('news_en')->select();

        //查询分类表
        $class = Db::name('category')->select();
        //重写分类数组
        $classify = '';
        foreach ($class as $key => $val) {
            $classify[$val['id']] = $val['catename'];
        }

        $this->assign('classify',$classify);
        $this->assign('res',$res);
        return view('news/lst');
    }

    //添加新闻
    public function add()
    {
        if (request()->isPost()) {
            //对缩略图进行处理,并存入数据库

            //得到添加数组
            $data = [
                'title' => input('post.title'),
                'classify' => input('post.classify'),
                'tag' => input('post.tag'),
                'source' => input('post.source'),
                'bro_num' => input('post.bro_num'),
                'keywords' => input('post.keywords'),
                'description' => input('post.description'),
                'content' => input('post.editorValue'),
                'createtime' => time(),
                'user' => session('admin_user.userid'),
                'status' => '1'
            ];

            //获取图片对象
            $im = request()->file('image');

            //如果图片对象存在,进行图片处理
            if (!empty($im)) {

                //打开图片文件
                $image = \think\Image::open(request()->file('image'));
                //得到图片后缀
                $type = $image->type();
                //拼写图片路径
                $path = "uploads/thumb/";
                //干扰数字
                $num = mt_rand(0,99);
                //生成图片存储名称
                $saveName = time().$num;
                //图片名加后缀
                $sname = $saveName.'.'.$type;
                //得到最终路径+名称+后缀
                $imagePath = $path.$saveName.'.'.$type;
                //裁剪图片为341,213,并存储至路径中
                $image->thumb(341,213,\think\Image::THUMB_CENTER)->save('./uploads/thumb/'.$saveName.'.'.$type);

                //数组$data补充图片信息
                $data['thumbnail'] = $imagePath;
                $data['thumb_name'] = $sname;
            }

            //添加新闻内容
            $res = Db::name('news_en')->insert($data);
            //判断新闻添加是否成功
            if ($res) {
                $this->success('添加新闻成功!',url('News/lst'));
            } else {
                $this->error('添加新闻失败!');
            }

            return;
        }

        //查询新闻分类
        $classify = Db::name('category')->where('pid','2')->select();

        $this->assign('classify',$classify);
        return view('news/add');
    }

    //全选删除
    public function delAll()
    {
        //计算数组元素数量
        $num = count(input('post.'));

        if ($num == 1) {
            $this->error('至少选择一行!');
        }

        //选择check数组
        $pid = input('post.')['check'];

        foreach ($pid as $key => $val) {
            //查询新闻表中的数据
            $data = Db::name('news_en')->where('id',$val)->find();
            //删除id
            unset($data['id']);

            //将数据存入回收站
            $res = Db::name('recycle_news_en')->insert($data);

            //删除新闻表中的数据
            $re = Db::name('news_en')->delete($val);
        }

        $this->success("删除新闻成功!");
    }

    //单个删除
    public function del($id)
    {
        //查询新闻表中的数据
        $data = Db::name('news_en')->where('id',$id)->find();
        //删除id
        unset($data['id']);

        //将数据存入回收站
        $res = Db::name('recycle_news_en')->insert($data);

        if ($res) {
            //删除新闻表中的数据
            $re = Db::name('news_en')->delete($id);

            $this->success('删除新闻成功!');
        } else {
            $this->error('删除新闻失败!');
        }
        
    }

    //编辑新闻
    public function edit($id)
    {
        if (request()->isPost()) {
            //得到需要更新的数组
            $data = input('post.');
            //更新时间写入数组
            $data['createtime'] = time();
            //删除新闻内容
            unset($data['editorValue']);
            //新闻内容以新的key值重新写入数组
            $data['content'] = input('post.editorValue');

            //获取图片对象
            $im = request()->file('image');

            //如果图片对象存在,进行图片处理
            if (!empty($im)) {
                //打开图片文件
                $image = \think\Image::open(request()->file('image'));
                //编辑缩略图
                //得到图片后缀
                $type = $image->type();
                //拼写图片路径
                $path = "uploads/thumb/";
                //干扰数字
                $num = mt_rand(0,99);
                //生成图片存储名称
                $saveName = time().$num;
                //得到最终路径+名称+后缀
                $imagePath = $path.$saveName.'.'.$type;
                //图片名加后缀
                $sname = $saveName.'.'.$type;
                //裁剪图片为341,213,并存储至路径中
                $image->thumb(341,213,\think\Image::THUMB_CENTER)->save('./uploads/thumb/'.$saveName.'.'.$type);
                //图片路径写入数组
                $data['thumbnail'] = $imagePath;
                //存入图片名称
                $data['thumb_name'] = $sname;
                //删除原缩略图
                $th = Db::name('news_en')->where('id',$id)->field('thumb_name')->find();
                $thumb_name = $th['thumb_name'];
                if (!empty($thumb_name)) {
                    unlink("./uploads/thumb/".$thumb_name);
                }
            }

            //更新新闻信息
            $re = db('news_en')->where('id',$id)->update($data);
            if ($re >= 0) {
                $this->success('修改新闻成功!',url('News/lst'),2);
            }else{
                $this->error('修改新闻失败!');
            }

            return;
        }

        //查询新闻表
        $res = Db::name('news_en')->where('id',$id)->find();

        //查询新闻分类
        $classify = Db::name('category')->where('pid','2')->select();

        $this->assign('classify',$classify);
        $this->assign('res',$res);
        return view('news/edit');
    }

    //是否显示
    public function show()
    {
        $id = input('post.id');

        //查询新闻表
        $res = Db::name('news_en')->where('id',$id)->field('status')->find();
        $status = $res['status'];

        if ($status == '1') {
            $st['status'] = '2';
            $num = Db::name('news_en')->where('id',$id)->update($st);
            if ($num == '1') {
                return ['txt' => 'blank'];
            }
        } elseif($status == '2') {
            $st['status'] = '1';
            $num = Db::name('news_en')->where('id',$id)->update($st);
            if ($num == '1') {
                return ['txt' => 'show'];
            }
        }
    }


}