<?php


namespace app\index\controller;

use think\Db;

class Demo4
{
    //全局配置
    public function conn1()
    {
        return Db::table('tab_user_info')
            ->where('phone_no', '13686948977')
            ->value('usr_name');
    }

    //动态配置
    public function conn2()
    {
        return Db::connect([
            'type' => 'mysql',
            'hostname' => 'localhost',
            'database' => 'jmfee',
            'username' => 'root',
            'password' => '1234qmdong',
        ])
            ->table('tab_user_info')
            ->where('phone_no', '15014337096')
            ->value('usr_name');
    }
    //DSN连接、
    public function conn3()
    {
        $dsn =  'mysql://root:1234qmdong@127.0.0.1:3306/demo#utf8';
        return Db::table('tab_user_info')
            ->where('phone_no', '15014337096')
            ->value('usr_name');
    }
}