<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 10:59
 * 项目管理控制器
 */
namespace Home\Controller;
use Think\Controller;
use Think\Think;
use Home\Model;
class ItemsController extends CommonController
{
    private $Items;
    private $User;
    public function _initialize()
    {
        $this->Items=D('items');
        $this->User=D('User');
    }
    /**
     *项目首页
     */
 public function index()
 {
     $team_id=$_SESSION['userinfo']['item_id'];
     $teaminfo=$this->User->getteam($team_id);
     $team_name=$teaminfo['team_name'];
     $iteminfo=$this->Items->getall($team_id);
     for($i=0;$i<count($iteminfo);$i++) {
         $iteminfo[$i]['team'] = $team_name;
     }
     $this->assign('item',$iteminfo);
     $this->display();
 }

 public function check()
 {
     $item_id=$_GET['item_id'];
     $item_info=$this->Items->getone($item_id);
     $this->assign('iteminfo',$item_info);
 }



}