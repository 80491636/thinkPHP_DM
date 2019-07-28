<?php
namespace app\index\controller;
use app\index\controller\Base;
class Videolst extends Base
{
    public function index()
    {
        return  $this->fetch('videolst');
    }
}
