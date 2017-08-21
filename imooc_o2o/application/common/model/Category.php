<?php
namespace app\common\model;
use think\Model;

class Category extends Model
{
    /**
     * @var bool自动写入插入时间和更新时间
     * 还可以通过database.php配置文件设置auto_timestamp=true
     */
    protected $autoWriteTimestamp = true;

    /**
     * @param $data 添加分类数据
     * @return 成功|失败
     */
    public function add($data)
    {
        $data['status'] = 1; // 默认分类状态:正常
        //$data['create_time'] = time(); // 默认分类添加时间:当前时间
        return $this->save($data); // 保存\修改
    }

    /**
     * 查询一级分类
     * @return 返回一级分类
     */
    public function getNormalFirstCategory()
    {
        $data = [
            'status'=>1,
            'parent_id'=>0,
        ];
        $order = [
            'listorder'=>'desc',
        ];
        return $this->where($data)
            ->order($order)
            ->select();
    }
}