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
        // 模型获取所有一级分类,传给模板
        $categorys = model("Category")->getNormalFirstCategory();
        return $this->fetch('',[
            'categorys' => $categorys,
        ]);
    }
    public function save()
    {
        $data = input('post.');
//        3. 场景设置 中的add--指定字段数据会被验证,忽略其他数据
        $validate = validate('Category');
        if(!$validate->scene('add')->check($data))
        {
            $this->error($validate->getError());
        }
//      4. 提交$data到model层,添加分类
        $res = model('Category')->add($data);
        if($res)
        {
            $this->success('新增分类成功');
        }
        else
        {
            $this->error('新增分类失败');
        }



    }
}
