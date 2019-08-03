<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Tags extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'tagname' => input('tagname'),
                'types' => input('types'),
            ];
            if(db('tags')->insert($data)){
                return $this->success('添加tags成功！','lst');
            }else{
                return $this->error('添加tags失败！');
            }
        }
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('tags')->paginate(10);
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
                'tagname' => input('tagname'),
                'types' => input('types'),
            ];
            $sql = db('tags')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改tags信息成功','lst');
            }else{
                return $this->error('修改tags失败！');
            }
        }
        $id = input('id');
        $tag = db('tags')->where('id',$id)->find();
        $this->assign('tag',$tag);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('tags')->delete($id);
        if($sql){
            return $this->success('删除tags成功'.$id,'lst');
        }else{
            return $this->error('删除tags失败！.$id','lst');
        }
    }
}
