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
        // 1. 用3种方式获取post提交过来的数据
//        print_r($_POST);// 原生方式
//        print_r(request()->post());// tp5
//        print_r(input('post.'));// tp5
        $data = input('post.');
//        $data['status'] = 10;
//        $data['listorder'] = '10s';

        // 2. 验证器
//        默认 走rule规则
//        $validate = validate('Category');
//        if(!$validate->check($data))
//        {
//            $this->error($validate->getError());
//        }
//        3. 场景设置 中的add--指定字段数据会被验证,忽略其他数据
        $validate = validate('Category');
        if(!$validate->scene('add')->check($data))
        {
            $this->error($validate->getError());
        }
//      4. 提交$data到model层,添加分类
        model('Category')->add($data);




    }
}
