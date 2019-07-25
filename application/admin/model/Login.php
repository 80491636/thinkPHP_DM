<?php
namespace app\admin\model;
use think\Model;
use think\captcha\Captcha;
class Login extends Model
{
  public function Login($data)
  {
    if(!captcha_check($data['code'])){
      return 4;
     };
    $admin = db('admin')->where('username',$data['username'])->find();
    if($admin == null){
        return 1;//用户名错误
    }else if(md5($data['password']) != $admin['password']){
        return 2;//密码错误
    }else{
        Session('username',$admin['username']);
        Session('uid',$admin['id']);
        return 3;// 登录成功
    }
  }
}
