<?php
namespace app\bis\controller;
use think\controller;
class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

}