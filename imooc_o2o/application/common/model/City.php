<?php
/**
 * Created by PhpStorm.
 * User: zouqianli
 * Date: 2017/8/23
 * Time: 15:20
 */
namespace app\common\Model;
use think\Model;

class City extends Model
{
    /**
     * 获取城市--默认一级
     * @param int $parentID
     * @return mixed
     */
    public function getNormalCitysByParentID($parentID=0)
    {
        $data = [
            'status'=>1,
            'parent_id'=> $parentID,
        ];
        $order = [
            'id'=>'desc',
        ];
        return $this->where($data)
            ->order($order)
            ->select();
    }
}