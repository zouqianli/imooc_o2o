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
        \phpmailer\Email::send('1004248149@qq.com','tp5_email',"send ok");
        return '发送邮件成功';
//        return $this->fetch(); // 有对应的welcome.html模板文件
        return '欢迎来到后台';
    }
    public function test()
    {
// http://api.map.baidu.com/geocoder/v2/?ak=sK0wQFqCiIqy59wpcadHDCzkZCyCcLx9&address='重庆市沙坪坝大学城'
        return \Map::getLongitudeAndLatitudeByAddress('重庆市沙坪坝大学城');
    }
    public function map()
    {
        return \Map::staticImage('重庆市沙坪坝大学城');
    }
}
