<?php
namespace app\common\model;
use think\Model;

class Category extends Model
{
    /**
     * @param $data 添加分类数据
     * @return false|int 保存成功\失败
     */
    public function add($data)
    {
        $data['status'] = 1; // 默认分类状态:正常
        $data['parent_id'] = 0; // 默认分类为一级分类:父类id=0
        $data['create_time'] = time(); // 默认分类添加时间:当前时间
        return $this->save($data); // 保存\修改
    }
}