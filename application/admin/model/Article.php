<?php
namespace app\admin\model;
use think\Model;
class Article extends Model
{
  public function Cate()
  {
    return $this->belongsTo('cate','cateid');
  }
}
