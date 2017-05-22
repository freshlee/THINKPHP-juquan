<?php
namespace Admin\Controller;
use Think\Controller;
class LinksController extends CommonController {

    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }
		

	
	

function AddFlink(){      
	  $this->check_logined();
	  $links=M('links');
	  $data["LinkName"] = $_POST['LinkName']; 
      $data["LinkUrl"] = $_POST['LinkUrl'];
	  $data["LinkOrder"] =$_POST['LinkOrder'];   
     if(!$links->add($data)) {$this->error("添加失败");}	 
	  $url=U("Flink");	
	  $this->assign("jumpUrl",$url);	 
	  $this->success("添加成功");	 	
    }

 
function Flink(){      //连接管理页     
	 $this->check_logined();
 	 $links=M('links');			
    import("ORG.Util.Page");// 导入分页类
    $count= $links->where($condition)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,18);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $links->where($condition)->order('LinkOrder')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('memberlist',$newsList_info);		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");
    $this->display(); 
 }	

function DelFlink(){      //删除链接
     session_start();
	 $this->check_logined();
   	$newstype=M('links');		
	$condition['ID']=$_GET['ID']; 
	$result = $newstype->where($condition)->delete();   
	$url=U("Flink");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("删除失败");    
    }
function DelAllFlink(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('links');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['ID']=$val;
		$list=$newstype->where($condition)->find();	
	   $result = $newstype->where($condition)->delete();   }		
	}	

function FlinkEdit(){      //删除链接
     session_start();
	 $this->check_logined();
   	$newstype=M('links');		
	$condition['ID']=$_GET['ID']; 
	$result = $newstype->where($condition)->find();   
    $this->assign("links",$result);
    $this->display(); 
   

}
function EditFlink(){      
	  $this->check_logined();
	  $links=M('links');
	  $condition['ID']=$_POST['ID'];
	  $data["LinkName"] = $_POST['LinkName']; 
      $data["LinkUrl"] = $_POST['LinkUrl'];
	  $data["LinkOrder"] =$_POST['LinkOrder'];   
     if(!$links->where($condition)->save($data)) {$this->error("修改失败");}	 
	  $url=U("Flink");	
	  $this->assign("jumpUrl",$url);	 
	  $this->success("修改成功");	 	
    }



function AddQQ(){      
	  $this->check_logined();
	  $links=M('qq');
	  $data["QQNumber"] = $_POST['QQNumber']; 
      $data["QQContact"] = $_POST['QQContact'];
	  $data["QQPhone"] =$_POST['QQPhone']; 
	  $data["QQOrder"] =$_POST['QQOrder'];   
      if(!$links->add($data)) {$this->error("添加失败");}	 
	  $url=U("QQ");	
	  $this->assign("jumpUrl",$url);	 
	  $this->success("添加成功");	 	
    }

 
function QQ(){      //会员管理页     
	 $this->check_logined();
 	 $links=M('qq');			
    import("ORG.Util.Page");// 导入分页类
    $count= $links->where($condition)->count();// 查询满足要求的总记录数
    $page = new Page($count,18);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $links->where($condition)->order('QQOrder')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('memberlist',$newsList_info);		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");
    $this->display(); 
 }	

function DelQQ(){      //删除链接
     session_start();
	 $this->check_logined();
   	$newstype=M('qq');		
	$condition['ID']=$_GET['ID']; 
	$result = $newstype->where($condition)->delete();   
	$url=U("QQ");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
function DelAllQQ(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('qq');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['ID']=$val;
		$list=$newstype->where($condition)->find();	
	   $result = $newstype->where($condition)->delete();   }		
	}	

function QQEdit(){      //删除链接
     session_start();
	 $this->check_logined();
   	$newstype=M('qq');		
	$condition['ID']=$_GET['ID']; 
	$result = $newstype->where($condition)->find();   
    $this->assign("links",$result);
    $this->display(); 
   

}
function EditQQ(){      
	  $this->check_logined();
	  $links=M('qq');
	  $condition['ID']=$_POST['ID'];
	  $data["QQNumber"] = $_POST['QQNumber']; 
      $data["QQContact"] = $_POST['QQContact'];
	  $data["QQPhone"] =$_POST['QQPhone']; 
	  $data["QQOrder"] =$_POST['QQOrder'];   
     if(!$links->where($condition)->save($data)) {$this->error("修改失败");}	 
	  $url=U("QQ");	
	  $this->assign("jumpUrl",$url);	 
	  $this->success("修改成功");	 	
    }



	
}	
	
?>