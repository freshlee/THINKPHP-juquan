<?php
namespace Admin\Controller;
use Think\Controller;
class SellerfirController extends CommonController {


    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }


	
function sellerfiradd(){         //添加项目管理页面
	$this->check_logined();		
	$newstype=M('goodsstyle');		
	$parent=$newstype->select();			
	$this->assign("list",$parent);		
	$this->display();	
  }		
	
function addsellerfir(){      //添加项目      
	  $this->check_logined();
	  $news=M('sellerfir');
	  $catfid=M('goodsstyle');	

	   if($_POST['fid']){
	  		$type = $_POST['fid'];
			
			$data['sf_style']	= $type;				    
			$data['sf_name'] 	= $_POST['sf_name'];
			//$data['sf_bgcolor'] = $_POST['sf_bgcolor'];
			//$data['sf_range']	= $_POST['sf_range'];
			$data['sf_simple'] 	= $_POST['sf_simple'];			
			$data['sf_detail'] 	= $_POST['sf_detail'];
			$data['sf_isrecom'] = $_POST['sf_isrecom'];
			//$data['sf_isok'] 	= $_POST['sf_isok'];
			$data['sf_sort'] 	= $_POST['sf_sort'];
			
	 		//$data["sf_regtime"] = date('Y-m-d',time());
			 
			
			//$data['sf_tel'] 	= $_POST['sf_tel'];
			//$data['sf_address'] = $_POST['sf_address'];
			//$data['sf_adlink'] 	= $_POST['sf_adlink'];
			//$data['sf_person'] 	= $_POST['sf_person'];	
			
			//$data['sf_mobile'] 	= $_POST['sf_mobile'];
			//$data['sf_opentime']= $_POST['sf_opentime'];
			//$data['sf_other'] 	= $_POST['sf_other'];
			/*if($_POST['sf_price'])
			{
				$data['sf_price'] 	= $_POST['sf_price'];
			}*/		
	    //图片上传		
/*		$info = $this->upload('logo/');//商品图片保存在Uploads/goods/目录
        //dump($info); exit;
		 
		 if($info){		   
			$picname=$info['pic']['savename'];
			$data['sf_logo']=$picname; //logo图			
		 }		
		$res = $news->add($data);
*/





$info = $this->upload('logo/');//商品图片保存在Uploads/goods/目录
       //dump($info); exit;
		 
		 if($info[0])
		 {
		  	
			
			
			
			 $image = new \Think\Image();
			//图片缩略图
			$picname=$info[0]['savename'];
			$path='./Uploads/logo/';
			 // dump($path.$picname); 
			
			$image->open($path.$picname);
			$image->thumb(300,300)->save($path.'s_'.$picname);
			$data['sf_logo']=$picname; //logo图	
			$data['sf_bgcolor']='s_'.$picname;//产品缩略图
						
		 }		
		 
		$res = $news->add($data);
		
		
/*	if($res)
	{
		//查询将要插入数据的id
		 $countid=$news->query("select max(sf_id)  from sellerfir");
		 $goods_id=$countid[0]['max(sf_id)'];
		 
		 if($info[1]){
		$image2 = new \Think\Image();
	    $propic=M('projectpic');
		for($i=1;$i<count($info);$i++){		
			//图片缩略图
			$picname2=$info[$i]['savename'];
			$path2='./Uploads/logo/';			
		
			$image2->open($path2.$picname2);
			$image2->thumb(200,200)->save($path2.'s_'.$picname2);
			$data5['pbigpic']=$info[$i]["savename"];//图片地址
		 	$data5['psmallpic']='s_'.$info[$i]["savename"];//图片地址
			$data5['pfid']=$goods_id;				
			$propic->add($data5);
		 }	
		}
	}
	*/


		if($res){
			$this->success("添加成功！");
		}else{
			$this->error("添加失败！");
		}  
		
    }
	else{$this->error("添加失败");}	  
	
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
	

function sellerfiredit(){      //编辑项目管理页面
	    //session_start();
	    $this->check_logined();
	   
	    $newstype=M('goodsstyle');		
		$parent=$newstype->select();			
		$this->assign("list",$parent);
	   
	   $newsList=M('sellerfir');	 	  
	   $newsList_info=$newsList->where('sf_id='.$_GET['ID'])->find();		   	    	
       $this->assign("newsList_info",$newsList_info);	
	   
	  /* $pic = M('projectpic');
	   $imgs=$pic->where('pfid='.$_GET['ID'])->select();
	   $this->assign("imgs",$imgs);
	   	  */
       $this->display();    	
    } 
	
	public function delimg(){
		
		 $delid=$_GET['imgId'];
		 $goodsid=I('get.goodsId');		 		
		 
		 $result=M("projectpic")->where('pid='.$delid)->delete();
		 echo json_encode($delid);
		//echo "12345";
	}	
	
	
function editsellerfir()
{      //编辑项目管理
    $this->check_logined();
	$news=M('sellerfir ');	
	if(!I('post.fid'))
	{
			$this->error("商家风格必须选择");
	}
	else
	{
			$data['sf_style']	= I('post.fid');
			$data['sf_id'] 		= $_POST['sf_id'];				    
			$data['sf_name'] 	= $_POST['sf_name'];
			//$data['sf_bgcolor'] = $_POST['sf_bgcolor'];
		//	$data['sf_range']	= $_POST['sf_range'];
			$data['sf_simple'] 	= $_POST['sf_simple'];			
			$data['sf_detail'] 	= $_POST['sf_detail'];
			$data['sf_isrecom'] = $_POST['sf_isrecom'];
		//	$data['sf_isok'] 	= $_POST['sf_isok'];
			$data['sf_sort'] 	= $_POST['sf_sort'];
			
		//	$data['sf_tel'] 	= $_POST['sf_tel'];
			//$data['sf_address'] = $_POST['sf_address'];
		//	$data['sf_adlink'] 	= $_POST['sf_adlink'];
		//	$data['sf_person'] 	= $_POST['sf_person'];	
			
			//$data['sf_mobile'] = $_POST['sf_mobile'];
			//$data['sf_opentime'] = $_POST['sf_opentime'];
		//	$data['sf_other'] 	= $_POST['sf_other'];	
		/*	if($_POST['sf_price'])
			{
				$data['sf_price'] 	= $_POST['sf_price'];
			}	*/	
/*	 //图片上传		
	$info = $this->upload('logo/');//商品图片保存在Uploads/goods/目录
     //dump($info); exit;
		 
	if($info)
	{		   
		$picname=$info['pic']['savename'];
		$data['sf_logo']=$picname; //logo图			
	}		

*/


//图片上传
	    $info = $this->upload('logo/');
       // dump($info);exit;
		 
		
		 if($info[0])
		 {
		  
			
			 $image = new \Think\Image();
			//图片缩略图
			$picname=$info[0]['savename'];
			$path='./Uploads/logo/';
			 // dump($path.$picname); 
			
			$image->open($path.$picname);
			$image->thumb(200,200)->save($path.'s_'.$picname);
			$data['sf_logo']=$picname; //logo图	
			$data['sf_bgcolor']='s_'.$picname;//产品缩略图
			
		 }
					 
	  
		$res=$news->save($data);	

/*
		if($res !== false){//1		
	if($info[0]){	//2 
		if($info[1]){
		$image2 = new \Think\Image();
	    $propic=M('projectpic');
		for($i=1;$i<count($info);$i++){		
			//图片缩略图
			$picname2=$info[$i]['savename'];
			$path2='./Uploads/logo/';			
		
			$image2->open($path2.$picname2);
			$image2->thumb(200, 200)->save($path2.'s_'.$picname2);
			$data5['pbigpic']=$info[$i]["savename"];//图片地址
		 	$data5['psmallpic']='s_'.$info[$i]["savename"];//图片地址
			$data5['pfid']=$data['sf_id'];				
			$propic->add($data5);
		 }	
		}
	}//2
	
	else{		//2 
		if($info[1]){
		$image2 = new \Think\Image();
	    $propic=M('projectpic');
		for($i=1;$i<count($info)+1;$i++){	
			//图片缩略图
			$picname2=$info[$i]['savename'];
			$path2='./Uploads/logo/';			
		
			$image2->open($path2.$picname2);
			$image2->thumb(200, 200)->save($path2.'s_'.$picname2);
			$data5['pbigpic']=$info[$i]["savename"];//图片地址
		 	$data5['psmallpic']='s_'.$info[$i]["savename"];//图片地址
			$data5['pfid']=$data['sf_id'];				
			$propic->add($data5);
		 }	
		}
	}//2
		
	}//1
		



*/





	  
		

	$url=U("sellerfirlist");	
	$this->assign("jumpUrl",$url);	  		
    if ($res !== false)   
	 $this->success("修改成功");	
	else    
	 $this->error("修改失败"); 		
    }
}


function sellerfirlist(){      //项目管理页     
 	//类别下拉菜单联动（开始）
	Load('extend');	
	$this->check_logined();
	$newstype=M('goodsstyle');		
	$parent=$newstype->select();			
	$this->assign('list',$parent);		    		
		
	
	 
	 // 判断查询条件		
	   if($_GET['Search']){	     
	   switch($_GET['search_type']){
    			case "title":						
				 $where['sf_name'] = array("like","%$_GET[KeyWord]%");break;
    			case "type": 
			      if($_GET['sf_style']=='All'){$condition=NULL; break;}
				  else
				  {
				  	$where['sf_style']=$_GET['sf_style'];
				  }				 
				break;
    		}
	  }	
	 
		
	$newsList=M('sellerfir'); 
   	import("ORG.Util.Page");// 导入分页类
    $count= $newsList->where($where)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $newsList->where($where)->order('sf_id')->limit($page->firstRow.','.$page->listRows)->select();
	Load('extend');
	
	foreach($newsList_info as $m=>$va)
	{
		$first = $newstype->where('gs_id='.$va['sf_style'])->find();		
		$newsList_info[$m]['style']=$first['gs_name'];
		
		if($va['sf_logo']=="")
		{
			$newsList_info[$m]['logo']=0;
		}
		else
		{
			$newsList_info[$m]['logo']=1;
		}
	}
	//dump($newsList_info);
    $this->assign('newsList_info',$newsList_info);	    		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");    		
    $this->display(); 
 }	
	
function delsellerfir(){      //删除项目
     //session_start();
	$this->check_logined();
   	$Projects=M('sellerfir');	
	$condition['sf_id']=$_GET['ID']; 
	$result = $Projects->where($condition)->delete(); 
	
	$propic=M("projectpic");
	$res=$propic->where('pfid='.$_GET['ID'])->delete();
	  
	$url=U("sellerfirlist");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
			

function DelAllFlink(){//删除所选链接	
    $this->check_logined();	
	$newstype=M('sellerfir');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['sf_id']=$val;
		$list=$newstype->where($condition)->find();	
	    $result = $newstype->where($condition)->delete();   }		
	}




  	
}	
	
?>