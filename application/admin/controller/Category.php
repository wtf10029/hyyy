<?php
namespace app\admin\controller;

use think\Db;

/**
* 分类管理
*/
class Category extends Base
{
    //分类列表
    public function lst()
    {
        //查询分类表
        $res = Db::name('category')->where('pid','0')->field('id,catename,pid')->select();

        //查询所有栏目
        $prog = Db::name('category')->where('pid','neq','0')->field('id,catename,pid')->select();

        $this->assign('prog',$prog);
        $this->assign('cate',$res);
        return view('category/lst');
    }

    //添加分类
    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');

            //插入分类表
            $res = Db::name('category')->insert($data);

            if ($res) {
                $this->success('添加分类成功!',url('Category/lst'));
            } else {
                $this->error('添加失败!');
            }

            return;
        }
        return view('category/add');
    }

    //添加栏目
    public function addProg($pid)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['pid'] = $pid;

            //插入分类表
            $res = Db::name('category')->insert($data);

            if ($res) {
                $this->success('添加栏目成功!',url('Category/lst'));
            } else {
                $this->error('添加栏目失败!');
            }

            return;
        }

        $this->assign('pid',$pid);
        return view('category/addProg');
    }

    //编辑分类
    public function edit($id)
    {
        if (request()->isPost()) {
            //获取post数据
            $data = input('post.');

            //更新分类信息
            $num = Db::name('category')->where('id',$id)->update($data);

            //判断是否更新成功
            if ($num >= 0) {
                $this->success('编辑分类成功!',url('Category/lst'));
            } else {
                $this->error('编辑分类失败!');
            }

            return;
        }
        //查询分类表
        $res = Db::name('category')->where('id',$id)->field('id,catename,title,keywords,description')->find();

        $this->assign('cate',$res);
        return view('category/edit');
    }

    //删除栏目
    public function delProg($id)
    {
        //查询分类表
        $res = Db::name('category')->where('pid',$id)->field('id')->select();

        //删除子栏目
        foreach ($res as $key => $val) {
            Db::name('category')->delete($val['id']);
        }

        //删除顶级栏目
        $num = Db::name('category')->delete($id);

        if ($num >0) {
            $this->success('删除栏目成功!');
        } else {
            $this->error('删除栏目失败!');
        }
        
    }

    //删除子集栏目
    public function delChild($id)
    {
        //直接删除栏目
        $res = Db::name('category')->delete($id);

        if ($res > 0) {
            $this->success('删除栏目成功!');
        } else {
            $this->error('删除栏目失败!');
        }
        
    }
}