<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Play extends Base
{
    public function index()
    {
        $id = input('id');
        $current_num = input('current_num');
        $playData = db('pcate')->where('id',$id)->find();
        
        $playData['current_num'] = $current_num;
        $playData['nomal_id'] = json_decode($playData['nomal_ids'],true);

        $playData['nomal_id'] = $playData['nomal_id'][$current_num]['V'];

        $this->assign([
            'playData'=>$playData,
        ]);
        return  $this->fetch('play');
    }
}
