<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Videolst extends Base
{
    public function index()
    {

        $cateid  = input('id');
        if(!$cateid){
            $cateid = 2;
        }
        $keyword = input('keyword');
        $time = input('time');

        if(!$keyword and !$time){
            $map['cateid'] = $cateid;
            
            $data = VcateModel::where($map)->paginate(28);
        }

        if(!$time){
            $time="全部";
        }else{
            if($time == "全部"){
                $data = VcateModel::paginate(28);
            }else{
                $map['publish_date'] = ['like','%'.$time.'%'];
                $data = db('pcate')->alias('a')->join('vcate c','c.id = a.vcate_id')->where($map)->paginate(28);
            }
        }
        //标签查询还是栏目id查询
        if(!$keyword){
            $keyword = "全部";
        }else{
            if($keyword == "全部"){
                $data = VcateModel::paginate(28);
            }else{
                $map['tag'] = ['like','%'.$keyword.'%'];
                $data = db('pcate')->alias('a')->join('vcate c','c.id = a.vcate_id')->where($map)->paginate(28);
            }
        }

        //查询所有标签
        $tags = db('tags')->select();

        // 把分页数据赋值给模板变量list
        $this->assign([
            'data' => $data,
            'tags' => $tags,
            'keyword'=> $keyword,
            'time'=>$time,
        ]);

        return  $this->fetch('videolst');
    }

    public function newest()
    {
        //模糊查找前20 在更新中的动漫
        $where['sets'] = ['like','%'.'更新'.'%'];
        $data = db('vcate')->where($where)->paginate(28);
        // dump($data);die;
        $this->assign([
            'data' => $data,
        ]);

        return  $this->fetch('videolst');

    }

}
