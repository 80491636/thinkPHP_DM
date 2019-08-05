<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Play extends Base
{
    public function index($id,$current_num)
    {
        $id = input('id');
        $current_num = input('current_num');
        $playData = db('pcate')->where('id',$id)->find();
        
        $playData['current_num'] = $current_num;
        $playData['nomal_id'] = json_decode($playData['nomal_ids'],true);

        $playData['nomal_id'] = $playData['nomal_id'][$current_num]['V'];
        // 右侧热度排行榜
        $count = db('pcate')->order('view_today_count desc')->limit(9)->select();

        $this->assign([
            'playData'=>$playData,
            'count'=>$count,
        ]);
        return  $this->fetch('play');
    }
}
