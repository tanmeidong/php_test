<?php


namespace app\index\controller;

use app\index\model\Type;

use app\index\model\Tbbasedata;

use app\index\model\UserInfo;
//模型是和一张数据表绑定
class Demo6
{
    public function get()
    {
        $res = Type::field('consumeType')
            ->where('num',1)
            ->find();
        dump($res);
    }

    public function get2()
    {
        $res = UserInfo::field('usr_name')
            ->where('card_state',1)
            ->select();
        dump($res);
    }

    public function get3()
    {
        $res = Tbbasedata::field('BasNameCN')
//            ->where('phone_no','15014337096')
            ->find();
        dump($res);
    }

    public function get4()
    {

        dump(UserInfo::all());
    }
}