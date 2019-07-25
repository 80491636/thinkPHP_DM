<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Cate extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'catename' => input('catename'),
            ];
            if(db('cate')->insert($data)){
                return $this->success('添加栏目成功！','lst');
            }else{
                return $this->error('添加栏目失败！');
            }
        }
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('cate')->paginate(3);
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
                'catename' => input('catename'),
            ];
            $sql = db('cate')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改栏目信息成功','lst');
            }else{
                return $this->error('修改栏目失败！');
            }
        }
        $id = input('id');
        $cate = db('cate')->where('id',$id)->find();
        $this->assign('cate',$cate);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('cate')->delete($id);
        if($sql){
            return $this->success('删除栏目成功'.$id,'lst');
        }else{
            return $this->error('删除栏目失败！.$id','lst');
        }
    }
}
