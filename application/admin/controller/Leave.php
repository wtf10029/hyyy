<?php
namespace app\admin\controller;

use think\Db;

/**
* 留言
*/
class Leave extends Base
{
    //留言列表
    public function lst()
    {
        //查询留言表
        $leave = Db::name('leave')->select();

        //发送数据
        $this->assign('leave',$leave);
        return view('leave/lst');
    }

    //单条删除
    public function del($id)
    {
        //直接删除
        $num = Db::name('leave')->delete($id);

        if ($num > 0) {
            $this->success('删除留言成功!');
        } else {
            $this->error('删除留言失败!');
        }
        
    }

    //多条删除
    public function delAll()
    {
        //计算数组元素数量
        $num = count(input('post.'));

        if ($num == 1) {
            $this->error('至少选择一行!');
        }

        $data = input('post.')['check'];

        //循环删除多条留言
        foreach ($data as $key => $val) {
            Db::name('leave')->delete($val);
        }

        $this->success('批量删除留言成功!');
    }
}