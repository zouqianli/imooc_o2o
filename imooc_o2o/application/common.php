<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 转换状态函数
 * tp5有获取器getfieldAttr,可以实现同样的效果
 * @param $status 状态
 * @return string 状态
 */
function status($status)
{
    if($status == 1)
    {
        $str = "<span class='label label-success radius'>正常</span>";
    }elseif($status == 0)
    {
        $str = "<span class='label label-warning radius'>待审</span>";
    }else
    {
        $str = "<span class='label label-danger radius'>已删除</span>";
    }
    return $str;
}

/**
 * 获取指定地址的内容
 * @param $url地址
 * @param $type 默认0 get方式,1 post方式
 * @param array $data参数
 * @return mixed内容
 */
function doCurl($url, $type=0, $data=[])
{
    // 1 初始化
    $ch = curl_init();
    // 2 设置选项
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // 3 类型
    if($type == 1)
    {
        // post方式
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    }

    // 4 执行 并 获取内容 $result
    $result = curl_exec($ch);
    // 5 释放curl句柄
    curl_close($ch);
    // 6 返回内容
    return $result;

}