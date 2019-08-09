<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// 注册路由到index模块的News控制器的read操作
Route::get('item-<id>-<current_num>','play/index',[],['id'=>'\d+','current_num'=>'\d+']);
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '[videolst]'     => [
        ':cateid'   => ['videolst/videolst', ['method' => 'get|post'], ['cateid' => '\d{1}']],
        ':keyword' => ['videolst/videolst', ['method' => 'get|post'], ['keyword' => '/[\x7f-\xff]/']],
        ':time' => ['videolst/videolst', ['method' => 'get|post'], ['time' => '\d{0,4}']],
    ],
    '[playlst]'     => [
        ':vcateid'   => ['playlst/playlst', ['method' => 'get|post'], ['vcateid' => '\d+']],
    ],
    '[play]'     => [
        ':id'   => ['play/index', ['method' => 'get|post'], ['id' => '\d+']],
        ':current_num'   => ['play/index', ['method' => 'get|post'], ['current_num' => '\d+']],
    ],
    '[search]'     => [
        ':keywords'   => ['search/search', ['method' => 'GET|POST'], ['keywords' => '\d+']],
    ],
    'index' => 'index/index',
];
