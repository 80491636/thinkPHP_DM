<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        $cateid = input('id');
        $menu = db('cate')->select();
        $this->assign([
            'menu' => $menu,
            'cateid' => $cateid,
        ]);
    }
}
