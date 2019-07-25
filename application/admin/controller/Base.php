<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        // 取值（当前作用域）
        if(session('username') == null){
            return $this->error('请先登录...','login/login');
        }
    }
}
