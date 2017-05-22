<?php
namespace Admin\Controller;
use Think\Controller;
class AdvertController extends CommonController {


    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }


	
function adsadd(){         //添加项目管理页面
	$this->check_logined();					
	$this->display();	
  }		
	
function addads(){      //添加项目      
	$this->check_logined();
	$news=M('adverts');					    
	$data['ads_name'] 	= $_POST['ads_name'];
			
	$data['ads_onoff'] 	= $_POST['ads_onoff'];
	$data['ads_sort'] 	= $_POST['ads_sort'];			
			 
	$res = $news->add($data);

	if($res)
	{
		$this->success("添加成功！");
	}
	else
	{
		$this->error("添加失败！");
	}  
			
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
			//$this->error($upload->getError());    
		}else{// 上传成功 获取上传文件信息
			return $info;
		}
	}
	

function adsedit(){      //编辑项目管理页面
	    //session_start();
	    $this->check_logined();	   	   
	   
	   $newsList=M('adverts');	 	  
	   $newsList_info=$newsList->where('ads_id='.$_GET['ID'])->find();		   	    	
       $this->assign("newsList_info",$newsList_info);	
	   	  
       $this->display();    	
    } 
		
function editads()
{      //编辑项目管理
    $this->check_logined();
	$news=M('adverts');	
	$data['ads_id'] 		= $_POST['ads_id'];				    
	$data['ads_name'] 		= $_POST['ads_name'];
	$data['ads_onoff'] 		= $_POST['ads_onoff'];
	$data['ads_sort'] 		= $_POST['ads_sort'];
	  
	$result=$news->save($data);		

	$url=U("adslist");	
	$this->assign("jumpUrl",$url);	  		
    if ($result !== false)   
	 $this->success("修改成功");	
	else    
	 $this->error("修改失败"); 		
}


function adslist(){      //项目管理页     
 	//类别下拉菜单联动（开始）
	Load('extend');	
	$this->check_logined();
	 
	 // 判断查询条件		
	 if($_GET['KeyWord'])
	 {	     	 				
		$where['ads_name'] = array("like","%$_GET[KeyWord]%");		
	 }	
	 
		
	$newsList=M('adverts'); 
   	import("ORG.Util.Page");// 导入分页类
    $count= $newsList->where($where)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $newsList->where($where)->order('ads_id')->limit($page->firstRow.','.$page->listRows)->select();
	Load('extend');
	
	//dump($newsList_info);
    $this->assign('newsList_info',$newsList_info);	    		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");    		
    $this->display(); 
 }	
	
function delads(){      //删除项目
     //session_start();
	$this->check_logined();
   	$Projects=M('adverts');	
	$condition['ads_id']=$_GET['ID']; 
	$result = $Projects->where($condition)->delete();   
	$url=U("adslist");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
			

function DelAllFlink(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('adverts');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['ads_id']=$val;
		$list=$newstype->where($condition)->find();	
	    $result = $newstype->where($condition)->delete();   }		
	}


////=============================================================================
////=============================================================================
function advertadd(){         //添加项目管理页面
	$this->check_logined();		
	$newstype=M('adverts');		
	$parent=$newstype->select();			
	$this->assign("list",$parent);		
	$this->display();	
  }		
	
function addadvert(){      //添加项目      
	  $this->check_logined();
	  $news=M('advert');	 

	   if($_POST['fid']){
	  		$type = $_POST['fid'];
			
			$data['ad_adsid']	= $type;				    
			$data['ad_name'] 	= $_POST['ad_name'];
			$data['ad_link'] 	= $_POST['ad_link'];						
			$data['ad_onoff'] 	= $_POST['ad_onoff'];
			$data['ad_sort'] 	= $_POST['ad_sort'];
						
	    //图片上传		
		$info = $this->upload('myads/');//商品图片保存在Uploads/goods/目录
        //dump($info); exit;
		 
		 if($info){		   
			$picname=$info['pic']['savename'];
			$data['ad_img']=$picname; //logo图			
		 }		
		 
		$res = $news->add($data);

		if($res){
			$this->success("添加成功！");
		}else{
			$this->error("添加失败！");
		}  
		
    }
	else{$this->error("添加失败");}	  
	
}
	

function advertedit(){      //编辑项目管理页面
	    //session_start();
	    $this->check_logined();
	   
	    $newstype=M('adverts');		
		$parent=$newstype->select();			
		$this->assign("list",$parent);
	   
	   $newsList=M('advert');	 	  
	   $newsList_info=$newsList->where('ad_id='.$_GET['ID'])->find();		   	    	
       $this->assign("newsList_info",$newsList_info);	
	   	  
       $this->display();    	
    } 
	

	
function editadvert()
{      //编辑项目管理
    $this->check_logined();
	$news=M('advert');	
	if(!I('post.fid'))
	{
			$this->error("广告位必须选择");
	}
	else
	{
			$data['ad_adsid']	= I('post.fid');
			$data['ad_id'] 		= $_POST['ad_id'];				    
			$data['ad_name'] 	= $_POST['ad_name'];
			$data['ad_link'] 	= $_POST['ad_link'];
			
			$data['ad_onoff'] 	= $_POST['ad_onoff'];
			$data['ad_sort'] 	= $_POST['ad_sort'];
					
	 //图片上传		
	$info = $this->upload('myads/');//商品图片保存在Uploads/goods/目录
     //dump($info); exit;
		 
	if($info)
	{		   
		$picname=$info['pic']['savename'];
		$data['ad_img']=$picname; //logo图			
	}		

	  
	$result=$news->save($data);		

	$url=U("advertlist");	
	$this->assign("jumpUrl",$url);	  		
    if ($result !== false)   
	 $this->success("修改成功");	
	else    
	 $this->error("修改失败"); 		
    }
}


function advertlist(){      //项目管理页     
 	//类别下拉菜单联动（开始）
	Load('extend');	
	$this->check_logined();
	$newstype=M('adverts');		
	$parent=$newstype->select();			
	$this->assign('list',$parent);		    		
		
	 
	 // 判断查询条件		
	   if($_GET['KeyWord'])
	   {	     	  
			$where['ad_name']  = array("like","%$_GET[KeyWord]%");			
	   }	
	  //=========================
	  //查看广告位下的广告
	  if($_GET['ID'])
	  {
	  	$where['ad_adsid']  = array("like","%$_GET[ID]%");
	  }
	 //==========================
		
	$newsList=M('advert'); 

   	import("ORG.Util.Page");// 导入分页类
    $count= $newsList->where($where)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $newsList->where($where)->order('ad_id')->limit($page->firstRow.','.$page->listRows)->select();
	Load('extend');
	
	foreach($newsList_info as $m=>$va)
	{
		$first = $newstype->where('ads_id='.$va['ad_adsid'])->find();		
		$newsList_info[$m]['adsname']=$first['ads_name'];				
	}
	//dump($newstype);
    $this->assign('newsList_info',$newsList_info);	    		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");    		
    $this->display(); 
 }	
	
function deladvert(){      //删除项目
     //session_start();
	$this->check_logined();
   	$Projects=M('advert');	
	$condition['ad_id']=$_GET['ID']; 
	$result = $Projects->where($condition)->delete();   
	$url=U("advertlist");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
			

function DelAllfood(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('advert');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['ad_id']=$val;
		$list=$newstype->where($condition)->find();	
	    $result = $newstype->where($condition)->delete();   }		
	}
	

  	
}	
	
?>