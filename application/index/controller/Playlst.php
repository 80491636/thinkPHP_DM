<?php
namespace app\index\controller;
use app\index\controller\Base;
class Playlst extends Base
{
    public function index()
    {
        $vcateid = input('id');
        
        $data = db('pcate')->where('vcate_id',$vcateid)->find();
        
        $data['leading_actor_id'] = json_decode($data['leading_actor_id']);
        $data['type_name'] = json_decode($data['type_name']);
        $data['tag'] = json_decode($data['tag']);
        $data['director_id'] = json_decode($data['director_id']);
        $data['score'] = json_decode($data['score']);
        $data['nomal_ids'] = json_decode($data['nomal_ids'],true);
        $data['nomal_ids'] =  array_reverse($data['nomal_ids']);
        
        // dump($data['nomal_ids']);die;

        $this->assign(
            'data' , $data
        );
        return  $this->fetch('playlst');
    }
}
