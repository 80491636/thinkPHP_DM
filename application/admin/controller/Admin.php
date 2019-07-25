<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\controller\Base;
class Admin extends Base
{
    public function add()
    {
        if(request()->isPost()){
            $data = [
                'username' => input('username'),
                'password' => md5(input('password')),
            ];
            if(db('admin')->insert($data)){
                return $this->success('添加管理员成功！','lst');
            }else{
                return $this->error('添加管理员失败！');
            }
        }
        return  $this->fetch();
    }
    public function lst()
    {
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('admin')->paginate(3);
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
                'username' => input('username'),
                'password' => md5(input('password')),
            ];
            $sql = db('admin')->where('id',$data['id'])->update($data);
            if($sql){
                return $this->success('修改管理员信息成功','lst');
            }else{
                return $this->error('修改管理员失败！');
            }
        }
        $id = input('id');
        $admin = db('admin')->where('id',$id)->find();
        $this->assign('admin',$admin);
        return $this->fetch();
    }
    public function del()
    {
        $id = input('id');
        $sql = db('admin')->delete($id);
        if($sql){
            return $this->success('删除管理员成功'.$id,'lst');
        }else{
            return $this->error('删除管理员失败！.$id','lst');
        }
    }
    public function logout()
    {
        // 清除session（当前作用域）
        session(null);
        return $this->success('退出登录...','login/login');
    }
}
