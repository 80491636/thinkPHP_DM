<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Index extends Base
{
    public function index()
    {
        // 右侧热度排行榜
        $count = db('pcate')->order('view_today_count desc')->limit(9)->select();
        //模糊查找前20 在更新中的动漫
        $where['episode_updated'] = ['like','%'.'更新'.'%'];
        $data = db('pcate')->where($where)->limit(20)->select();
        //标签
        $tags = db('tags')->limit(6)->select();
        //轮播图
        $bander = db('bander')->select();

        $this->assign([
            'data'=>$data,
            'count'=>$count,
            'tags'=>$tags,
            'bander'=>$bander,
            ]);
        return  $this->fetch();
    }
}
