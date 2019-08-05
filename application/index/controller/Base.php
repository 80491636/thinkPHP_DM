<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {
        //cateid 与 cate表中id 对应
        $cateid = input('cateid');
        $menu = db('cate')->select();
        $this->assign([
            'menu' => $menu,
            'cateid' => $cateid,
        ]);
    }
}
