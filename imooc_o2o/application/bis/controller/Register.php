<?php
namespace app\bis\controller;
use think\Controller;
class Register extends Controller
{
    public function index()
    {
        // 获取一级城市 传递给模板
        $citys = model('City')->getNormalCitysByParentID();
        // 获取一级分类 传递给模板
        $categorys = model('Category')->getNormalCategorysByParentID();
        return $this->fetch('',[
            'citys' =>  $citys,
            'categorys' =>  $categorys,
        ]);
    }

}