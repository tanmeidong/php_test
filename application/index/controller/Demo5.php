<?php


namespace app\index\controller;

use think\Db;


class Demo5
{
    //1、单条查询
    public function find()
    {

        $res = Db::table('tab_user_info')
            ->field('usr_name,phone_no,card_no,usr_no')
            ->where('ust_ID', 1024)
            ->find();
        dump(is_null($res) ? '暂无数据' : $res);
    }

    //2、多条查询
    public function select()
    {
        $res = Db::table('tab_user_info')
            ->field('usr_name,phone_no,card_no,usr_no')
            ->where([
                ['card_state', '=', 1],
                ['FeeResource', '=', 'DeFee1']
            ])->select();
        if (empty($res)) {
            return '暂无数据';
        } else {
            foreach ($res as $row) {
                dump($row);
            }
        }
    }

    //3、单条插入
    public function insert()
    {
        $data = [
            'No'=>7,
            'MyName'=>'下午下下茶'
        ];
//        return Db::table('three_meals')->data($data)->insert();
        return Db::table('three_meals')->insertGetId($data);

    }

    //4、多条插入
    public function insertAll()
    {

        $data = [

            ['No'=>8,'MyName'=>'宵夜1'],
            ['No'=>9,'MyName'=>'宵夜2'],
            ['No'=>10,'MyName'=>'宵夜3'],
        ];
        return Db::table('three_meals')->insertAll($data);
    }

    //5、更新操作
    public function update()
    {
        return Db::table('three_meals')
            ->where('No',7)
            ->update(['MyName'=>'早早早']);
    }

    //6、删除操作
    public function delete()
    {
        return Db::table('three_meals')
            ->where('No',9)
           ->delete();
    }

    //7、原生查询
    public function query()
    {
        $sql = "select * from three_meals";
        dump(Db::query($sql));
    }

}