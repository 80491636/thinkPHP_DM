<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Login as LoginModel;
class Login extends Controller
{
    public function login()
    {
        if(request()->ispost()){
            $data = [
                'username' => input('username'),
                'password' => input('password'),
            ];
            $user = new LoginModel();
            $num = $user->login($data);
            switch($num){
                case 1:
                    return $this->error('用户名错误');
                break;
                case 2:
                    return $this->error('密码错误');
                case 3:
                    return $this->success('登录成功，正在跳转...','index/index');
            }
        }
        return $this->fetch();
    }

}
