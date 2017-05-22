<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
   public function check_logined(){       //检测是否已经登录
        session_start();
        $user=M('admin');
        $condition['UserName']=$_SESSION['Username'];
        $us=$user->where($condition)->find();
        //$this->success(U("/Home/Login/index"));
        $url=U("Home/Index/login");
        if(!$us){ $this->assign("jumpUrl",$url);$this->error("登录失败");}
    }
    public function returnurl(){
        $url=$_SERVER['HTTP_REFERER'];
        $url=explode("/", $url);
        $url=array_slice($url, -3);
        $res=implode("/", $url);
        $res=substr($res,0,strlen($res)-5);
        $this->redirect($res);
        return $res;
    }
}