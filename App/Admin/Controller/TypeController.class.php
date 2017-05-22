<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends CommonController {

	
  	function _initialize(){
   	 	header("Content-type:text/html;charset=utf-8");
  	}

	
function add(){         //添加项目管理页面
	$this->check_logined();				
	$this->display();	
  }		
	
function doadd(){      //添加项目      
	  $this->check_logined();
	  $news=M('type');				    
	  $data['name'] 	= $_POST['name'];
	  $data['ename'] 	= $_POST['ename'];
	  $data['sort'] 	= $_POST['sort'];
								
	    //图片上传
	if($_FILES['pic']['name']){  	
		$info = $this->upload('series/');//商品图片保存在Uploads/goods/目录
        //dump($info); exit;		 
		 if($info){		   
			$picname=$info['pic']['savename'];
			$data['img']=$picname; //logo图			
		 }	
	}		 
		$res = $news->add($data);

		if($res){
			$this->success("添加成功！");
		}else{
			$this->error("添加失败！");
		} 		 
	
}

	

function edit(){      //编辑项目管理页面
	   $this->check_logined();		
	   $newsList=M('type');	 	  
	   $newsList_info=$newsList->where('id='.$_GET['id'])->find();		   	    	
       $this->assign("newsList_info",$newsList_info);		   	  
       $this->display();    	
    } 
	

	
function doedit()
{      //编辑项目管理
    $this->check_logined();
	$news=M('type');	
	
			
	$data['id'] 	= $_POST['id'];				    
	$data['name'] 	= $_POST['name'];
	$data['ename'] 	= $_POST['ename'];			
	$data['sort'] 	= $_POST['sort'];
	
	if($_FILES['pic']['name']){  				
		 //图片上传		
		$info = $this->upload('series/');//商品图片保存在Uploads/goods/目录	 
		if($info)
		{		   
			$picname=$info['pic']['savename'];
			$data['img']=$picname; //logo图			
		}
	}		

	  
	$result=$news->save($data);		

	$url=U("index");	
	$this->assign("jumpUrl",$url);	  		
    if ($result !== false)   
	 $this->success("修改成功");	
	else    
	 $this->error("修改失败"); 		
    
}


public function index(){      //项目管理页     
 	//类别下拉菜单联动（开始）
	Load('extend');	
	$this->check_logined();
	$thisis = M('type');		
   	import("ORG.Util.Page");// 导入分页类
    $count= $thisis->where($where)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $thisis->where($where)->order('sort')->limit($page->firstRow.','.$page->listRows)->select();
	Load('extend');
		
	//dump($newsList_info);
    $this->assign('newsList_info',$newsList_info);	    		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");    		
    $this->display(); 
 }	
	
function del(){      //删除项目
     //session_start();
	$this->check_logined();
   	$Projects=M('type');	
	$condition['id']=$_GET['id']; 
	$result = $Projects->where($condition)->delete();   
	$url=U("index");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
			

function DelAllGoods(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('goodsstyle');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['gs_id']=$val;
		$list=$newstype->where($condition)->find();	
	    $result = $newstype->where($condition)->delete();   }		
	}

	//上传方法
	public function upload($path){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 1145728 ;// 设置附件上传大小
		$upload->exts = array('jpg','gif','png','jpeg');// 设置附件上传类型
		$upload->rootPath = './Uploads/'; // 设置文件上传保存的根路径  
		$upload->savePath = $path; // 设置附件上传目录
		$upload->subName  = '';//子目录
		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());    
		}else{// 上传成功 获取上传文件信息
			return $info;
		}
	}

  	
}	

	
?>