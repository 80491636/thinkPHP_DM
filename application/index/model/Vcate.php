<?php
namespace app\index\model;
use think\Model;
class Vcate extends Model
{
    public function cate()
    {
        return $this->belongsTo('cate','cateid');
    }
}
