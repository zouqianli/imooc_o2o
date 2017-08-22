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
    public function test()
    {
// http://api.map.baidu.com/geocoder/v2/?ak=sK0wQFqCiIqy59wpcadHDCzkZCyCcLx9&address='重庆市沙坪坝大学城'
        \Map::getLongitudeAndLatitudeByAddress('重庆市沙坪坝大学城');
        return 'zz';
    }
}
