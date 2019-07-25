<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Links extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'linkname' => input('linkname'),
                'url' => input('url'),
                'content' => input('content'),
            ];
            if(db('links')->insert($data)){
                return $this->success('添加友情链接成功！','lst');
            }else{
                return $this->error('添加友情链接失败！');
            }
        }
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('links')->paginate(3);
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
                'linkname' => input('linkname'),
                'url' => input('url'),
                'content' => input('content'),
            ];
            $sql = db('links')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改友情链接信息成功','lst');
            }else{
                return $this->error('修改友情链接失败！');
            }
        }
        $id = input('id');
        $link = db('links')->where('id',$id)->find();
        $this->assign('link',$link);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('links')->delete($id);
        if($sql){
            return $this->success('删除友情链接成功'.$id,'lst');
        }else{
            return $this->error('删除友情链接失败！.$id','lst');
        }
    }
}
