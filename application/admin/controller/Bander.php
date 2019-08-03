<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Bander extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'title' => input('title'),
                'url' => input('url'),
                'content' => input('content'),
            ];
            if(db('bander')->insert($data)){
                return $this->success('添加轮播图成功！','lst');
            }else{
                return $this->error('添加轮播图失败！');
            }
        }
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('bander')->paginate(10);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        // 渲染模板输出
        return $this->fetch();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'url' => input('url'),
                'content' => input('content'),
            ];
            $sql = db('bander')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改轮播图信息成功','lst');
            }else{
                return $this->error('修改轮播图失败！');
            }
        }
        $id = input('id');
        $link = db('bander')->where('id',$id)->find();
        $this->assign('link',$link);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('bander')->delete($id);
        if($sql){
            return $this->success('删除轮播图成功'.$id,'lst');
        }else{
            return $this->error('删除轮播图失败！.$id','lst');
        }
    }
}
