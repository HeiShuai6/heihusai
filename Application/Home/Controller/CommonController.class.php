<?php
namespace Home\Controller;
use Home\Controller\BaseController;
use Think\Controller;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 16:21
 */
class CommonController extends Controller
{
    /**
     * CommonController constructor.  判断用户是否登录
     */
    public function __construct()
    {
        parent::__construct();
       if(!empty($_SESSION['userinfo']["user_id"]))
       {
           $user_id=$_SESSION['userinfo']["user_id"];
       }else{
          $user_id='false';
       };
        if( $user_id == 'false'){
            if(!empty($_POST['name']) && $user_id=='false')
            {
                $this->login();
            }else{
                $this->log();
            }
        }

    }

    /**
     * 登录页面
     */
    public function log(){
        layout(false);
        $this->display('Comm/login');
        exit;
    }

    /**
     * 登录验证
     */
    public function login()
    {
       $name=$_POST['name'];
        $pwd=$_POST['pwd'];
        $User=D('User');
        $msg=$User->check($name,$pwd);
        if($msg)
        {
            $this->success("登录成功",U('Index/index'));
        }else{
            $this->error("垃圾");
        }
    }
}