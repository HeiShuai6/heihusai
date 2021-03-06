<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/16
 * Time: 10:39
 * 用户表操作
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    private $User;
    private $Team;
    public function _initialize()
    {
        $this->User=M('User');
        $this->Team=M('Team');
    }

    /**
     * @param string $name
     * @param mixed $pwd
     * @return bool
     * 检查用户登录信息
     */
    public function check($name,$pwd)
    {
        $log['user_name']=$name;
        $log['user_pwd']=$pwd;
        $userinfo=$this->User->where($log)->find();
        $_SESSION['userinfo']=$userinfo;
        if($userinfo)
        {
            return $msg=ture;
        }else{
            return $msg=false;
        }
    }

    /**
     * @param $team_id
     * @return mixed
     * 获取团队信息
     * 目前相对简陋所以返回数组格式
     */
    public function getteam($team_id)
    {
     $teaminfo=$this->Team->where('team_id='.$team_id)->find();
        return $teaminfo;
    }

}