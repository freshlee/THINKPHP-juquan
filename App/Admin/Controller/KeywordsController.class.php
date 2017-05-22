<?php
namespace Admin\Controller;
use Think\Controller;
class KeywordsController extends CommonController {

    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }



function keywordsadd(){
		$this->display();
  }
//上传方法
	public function upload($path){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg','gif','png','jpeg');// 设置附件上传类型
		$upload->rootPath = './Uploads/'; // 设置文件上传保存的根路径  
		$upload->savePath = $path; // 设置附件上传目录
		$upload->subName  = '';//子目录
		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());    
		}else{// 上传成功 获取上传文件信息
			return $info;
		}
	}

 public  function add(){         //添加单页 	
	//session_start();
	  $this->check_logined();
	  $singlepage=M('keywords');
	  //dump(I('post.Title'));
	  $data['name']=$_POST['name'];
  	  $data['sort']=$_POST['sort'];   
	  
	  $result=$singlepage->add($data);
	  $url=U("keywordslist");
	  $this->assign("jumpUrl",$url);	  	
      if($result !== false){
       $this->success("添加成功！");
      }else{
        $this->error("添加失败！");
      } 	
  }		

function keywordslist(){
      $this->check_logined();
	  $singlepage=M('keywords');
	  	  
      import("ORG.Util.Page");// 导入分页类
      $count= $singlepage->where($condition)->count();// 查询满足要求的总记录数
      $page = new \Think\Page($count,18);// 实例化分页类 传入总记录数和每页显示的录数
      $show = $page->show();// 分页显示输出
      // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $AboutList = $singlepage->where($condition)->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
	  Load('extend');	//加载字符串截取函数msubstr,例如{<$newsList_info.InformationTitle|msubstr=0,20,'utf-8',true>}	
	  //dump($productList_info);
	  
      $this->assign('AboutList',$AboutList);		
      $this->assign("page",$show );
      $this->assign("pagestyle","green-black");
      $this->display(); 
}



function Abouts(){
  $this->check_logined();
  $singlepage=M('keywords');
  $condition['ID']=$_GET['id'];
  $result=$singlepage->where($condition)->find();	   
  $this->assign("result",$result);		    
  $this->display();    	
}

function keywordsedit(){
  $this->check_logined();
  $singlepage=M('keywords');
  $condition['id']=$_GET['id'];
  $result=$singlepage->where($condition)->find();	   
  $this->assign("result",$result);		    
  $this->display();    	
}

function EditAbout(){         //修改单页 	
	//session_start();
	  $this->check_logined();
	  $singlepage=M('keywords');
	  $data['id']=$_POST['id'];
	  $data['name']=$_POST['name'];  
	  $data['sort']=$_POST['sort'];
	 
	  $result=$singlepage->save($data); 
	 
	  $url=U("keywordslist");
	  $this->assign("jumpUrl",$url);	  	
      if($result !== false){
       $this->success("修改成功！");
      }else{
        $this->error("修改失败！");
      } 	
  }	

function DelAbout(){      //删除 
   	$files=M('keywords');		
	$condition['id']=$_GET['id']; 
	$result1 = $files->where($condition)->find();	
	$img= $result1['pict'];
	$urlFileName = explode(",",$img);
	foreach($urlFileName as $val)		 unlink(".".$val);  //删除编辑器图片upload文件夹图片	
	$result = $files->where($condition)->delete();
	$url=U("keywordslist");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("删除失败");    
    }


 
	
}	
	
?>