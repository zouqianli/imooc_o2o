<?php
namespace app\admin\validate;
use think\Validate;

class Category extends Validate
{
    //1.验证规则(默认) 验证rule中的所有字段
    protected $rule = [
        ['name','require|max:10','分类名不能为空|分类名不能超过10个字符'],
        ['parent_id','number','父类ID为数字'],
        ['id','number','ID为数字'],
        ['status','number|in:-1,0,1','状态为数字|状态不合法,-1,0,1之一'],
        ['listorder','number','排序规则为数字'],
    ];
    //2.场景设置 对不同场景验证不同字段
    protected $scene = [
        'add' => ['name','parent_id'],//添加 验证name,parent_id字段
        'listorder' => ['id','listorder'],//排序 验证id,listorder字段
    ];
}