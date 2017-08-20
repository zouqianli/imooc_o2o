<?php
namespace app\admin\controller;
use think\Controller;

class Category extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }
    public function save()
    {
        // 3种方式获取post提交过来的数据
//        print_r($_POST);// 原生方式
//        print_r(input('post.'));// tp5
        print_r(request()->post());// tp5
    }
}
