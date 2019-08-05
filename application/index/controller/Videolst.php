<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Videolst extends Base
{
    public function videolst($cateid=2, $keyword="全部",$time="全部")
    {
        if($keyword =="全部" and $time=="全部"){
            $map['cateid'] = $cateid;
            $data = VcateModel::where($map)->paginate(28);
        }

        if($time != "全部"){
            $map['publish_date'] = ['like','%'.$time.'%'];
            $data = db('pcate')->alias('a')->join('vcate c','c.id = a.vcate_id')->where($map)->paginate(28);
        }
        //标签查询还是栏目id查询
        if($keyword != "全部"){
            $map['tag'] = ['like','%'.$keyword.'%'];
            $data = db('pcate')->alias('a')->join('vcate c','c.id = a.vcate_id')->where($map)->paginate(28);
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

        return  $this->fetch();
    }

}
