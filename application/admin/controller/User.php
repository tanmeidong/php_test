<?php


namespace app\admin\controller;
use think\facade\Config;

class User
{
    public function get()
    {
        dump(Config::get());
    }

}