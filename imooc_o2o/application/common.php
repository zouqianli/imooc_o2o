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