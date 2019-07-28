<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Videolst extends Base
{
    public function index()
    {
        $this->cateid = input('id');
        $cateid = $this->cateid;

        $data = VcateModel::where('cateid',$cateid)->paginate(28);
        // 把分页数据赋值给模板变量list
        $this->assign([
            'data' => $data,
        ]);

        return  $this->fetch('videolst');
    }
}
