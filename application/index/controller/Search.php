<?php
namespace app\index\controller;
use app\index\controller\Base;
use app\index\model\Vcate as VcateModel;
class Search extends Base
{
    public function Search($keywords)
    {
        $keywords = htmlspecialchars($keywords);
        if($keywords){
            $map['title']=['like','%'.$keywords.'%'];
            $searchres=db('vcate')->where($map)->order('id desc')->paginate($listRows = 28, $simple = false, $config = [
                'query'=>array('keywords'=>$keywords),
                ]);
            $this->assign(array(
                'searchres'=>$searchres,
                'keywords'=>$keywords
                ));
        }else{
            $this->assign(array(
                'searchres'=>null,
                'keywords'=>'暂无数据'
                ));
        }
        return  $this->fetch();
    }

}
