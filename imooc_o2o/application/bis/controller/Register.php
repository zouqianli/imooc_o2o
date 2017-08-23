<?php
namespace app\bis\controller;
use think\Controller;
class Register extends Controller
{
    public function index()
    {
        // 获取一级城市 传递给模板
        $citys = model('City')->getNormalCitysByParentID();
        return $this->fetch('',[
            'citys' =>  $citys,
        ]);
    }

}