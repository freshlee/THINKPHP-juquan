<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }
		
    public function index(){
	    session_start();
		$this->check_logined();
	    $this->display();
    }	
		


function quit(){
	  session_start();	 
	  $url=U("Home/Index/index");
	  session_unset();
	  session_destroy();
	 $this->assign("jumpUrl",$url);
	 $this->success("退出成功");
      header("Location:$url");
	}

function Top(){
	  session_start();	 
	  $user=M('admin');
      $condition['UserName']=$_SESSION['Username']; 
      $us=$user->where($condition)->find();	
	  $this->assign("member",$us);
	  $this->display();		 
}
  
function Left(){
	  session_start();	 
	  //网站设置
	  $website=M('website');
	  $websites=$website->find();
	  $this->assign("website",$websites);
	  
	  $user=M('admin');
      $condition['UserName']=$_SESSION['Username']; 
      $us=$user->where($condition)->find();	
	  $this->assign("member",$us);
	  
	  $this->display();		 
}  
  	
}	
	
?>