<?php

namespace app\index\controller;

use think\Db;
use think\Exception;
use think\facade\Request;

class Index
{
//1、使用sql语句查询student数据库的test_student_t表，以json数据返回所有学生姓名(要求用for循环将姓名添加到数组再返回)
    public function select()
    {

    }

//2、使用sql语句联表查询student数据库的test_student_t表和test_course_t表小明的课程，以json数据返回学生姓名，课程名称，任课老师，要求使用get请求，参数从url中获取
    public function selectQuery()
    {

    }

//3、使用sql语句更新小李同学数学课的老师为彭老师，要求使用post请求，学生姓名，课程名称，任教老师作为参数传入，以json数据返回影响行数
    public function update()
    {

    }

//4、使用sql语句往test_student_t表插入3条记录，要求使用post请求，学生姓名和学号必须是以参数传入，其他参数可动态或固定，字符串分隔后，用foreach处理数据后插入，只能请求一次
    public function insert()
    {

    }

//5、使用Db::table()方法查询test_student_t表最新的五条记录,使用get请求，以json数据返回，
    public function selectAll()
    {

    }
}
