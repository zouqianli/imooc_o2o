<?php
/**
 * show函数:返回服务端的提示信息--类似tp5的result()方法
 * tp5的result()方法缺点:要继承think\Controller;
 * @param $status   状态
 * @param string $message 提示消息
 * @param array $data 返回数据
 * @return array 数组
 */
function show($status, $message='', $data=[])
{
    return [
        'status'    =>  $status,
        'message'   =>  $message,
        'data'      =>  $data,
    ];
}