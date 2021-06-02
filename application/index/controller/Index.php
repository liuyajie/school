<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        dump('index');die;
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
