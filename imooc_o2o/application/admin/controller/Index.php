<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function welcome()
    {
//        return $this->fetch(); // 有对应的welcome.html模板文件
        return '欢迎来到后台';
    }
}
