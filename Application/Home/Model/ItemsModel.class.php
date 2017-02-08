<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 11:55
 * 项目表操作
 */
namespace Home\Model;
use Think\Model;


class ItemsModel extends Model
{
    private $Item;
    public function _initialize()
    {
        $this->Item=M('items');
    }

    /**
     * @param $team_id
     * @return mixed
     * 查询所有项目
     */
    public function getall($team_id)
    {
        $iteminfo=$this->Item->where('team_id='. $team_id)->select();
        return $iteminfo;
    }

    public function getone($item_id)
    {
    return  $this->Item->where('item_id='.$item_id)->find();
    }
}
