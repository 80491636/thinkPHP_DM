<?php
namespace app\index\controller;
use app\index\controller\Base;
class Playlst extends Base
{
    public function index()
    {
        return  $this->fetch('playlst');
    }
}
