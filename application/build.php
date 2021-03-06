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

return [
    // 定义公共目录
    'common' => [
        '__dir__' => ['config', 'logic', 'model', 'param', 'tool', 'traits', 'validate'],
        'model'   => ['User', 'UserDetail']
    ],

    // 定义index模块的自动生成 （按照实际定义的文件名生成）
    'index'  => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'view', 'logic', 'param'],
        'controller' => ['Index'],
        'view'       => ['index/index'],
    ],

    // 定义admin模块的自动生成 （按照实际定义的文件名生成）
    'admin'  => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'view', 'logic', 'param'],
        'controller' => ['Admin'],
        'view'       => ['admin/index'],
    ],

    // 定义error模块的自动生成 （按照实际定义的文件名生成）
    'error'  => [
        '__dir__'    => ['controller', 'view'],
        'controller' => ['Error'],
        'view'       => ['error/index'],
    ],
];
