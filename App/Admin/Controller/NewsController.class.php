<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Think\Template\Driver\Mobile;
use Think\Page;
class NewsController extends CommonController {




//..........................................资讯中心模块．..................................．．．．．．．．．．．


	
	
function NewsAdd(){         //添加资讯页面
	$this->check_logined();
	$cate=new Model("newscate");
	$data=$cate->select();
	$this->assign("cate",$data);
	

		
		
		$this->display();	
  }	
 
 function addnews(){      //添加资讯
	  $news=new Model('news');
	
	if($_POST['fid']){
	  	$data["InformationTitle"] =  $_POST["InformationTitle"]; 
	    $data["InformationContent"] =  $_POST["InformationContent"];
		$data["InformationCont"] = $_POST["InformationCont"]; 
	    $data["InformationOrder"] =  $_POST["InformationOrder"]; 
		$data["IsTop"] =  $_POST["IsTop"]; 
		$data["IsDes"] =  $_POST["IsDes"]; 
		$data["InformationAuthor"] =  $_POST["InformationAuthor"]; 
	    $data["InformationType"] =  $_POST['fid'];
        $data["InformationUpdate"]=date('Y-m-d H:i:s',time());
        $info = $this->upload('news/');
		 if($info){
		   $image = new \Think\Image();		   
			//图片缩略图
			$picname=$info['savename'];			
			$path="./Uploads/news/";
			$image->open($path.$picname);
			$image->thumb(250,200)->save($path.'s_'.$picname);
			$data['InformationBigPic']=$picname; //产品大图
			$data['InformationPic']='s_'.$picname;//产品缩略图

		 }
		 	
		dump($data);
		$result=$news->data($data)->add();
        dump($result);
	 $url=U("NewsList");
     $this->assign("jumpUrl",$url);     
    if (!$result)  {$this->error("添加失败");}	  
	$this->success("添加成功");	
	 }
	else{$this->error("须填写类别");}	 
 	
}	
	public function upload($path){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg','gif','png','jpeg');// 设置附件上传类型
		$upload->rootPath = './Uploads/'; // 设置文件上传保存的根路径  
		$upload->savePath = $path; // 设置附件上传目录
		$upload->subName  = '';//子目录
		$upload->saveName = time().'_'.mt_rand();
		$info = $upload->uploadOne($_FILES['pcc']);
		return $info;
	}


//新增一个新闻分类
 function addnewscate(){
 	$cate=new Model('newscate');
 	$cate->create();
 	$res=$cate->add();

 	dump($res);
 	if($res){
 	    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
 	    $this->redirect('News/NewsSort');
 	} else {
 	    //错误页面的默认跳转页面是返回前一页，通常不需要设置
 	    $this->error('增加失败');
 	}

 }

 public function NewsSort(){
 	$cate=new Model('newscate');
 	$list=$cate->select();
 	$res=$this->assign('list',$list);

 	$this->display();
 }
 //修改或者删除一个新闻分类
 public function modifynews(){
     if($_REQUEST['act']=="delmulti"){
         $news=new Model('news');
         $where='id in ('.implode(",", $_POST['CheckBoxID']).')';
         $res=$news->where($where)->delete();
         if($res){$this->redirect('News/Newslist');}
         else{
            $this->error('删除失败');
         }
     }
     elseif ($_REQUEST['act']=="del"){
         $news=new Model("news");
         $where['id']=$_REQUEST['InformationID'];
         $res=$news->where($where)->delete();
         if($res){$this->redirect('News/Newslist');}
         else{
             $this->error('删除失败');
         }
         
         
     }
     else {
      $news=new Model("newscate");
     $where['id']=$_POST['id'];
     $result=$news->where($where)->delete();
     if($result){
         //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
 	    $this->redirect('News/NewsSort');
     } else {
         //错误页面的默认跳转页面是返回前一页，通常不需要设置
         $this->error('删除失败');
     }
     }
 }
public function Newslist(){
    $news=new Model("News");
    $data=$news->page($_GET['page'],25)->select();
    $cate=new Model('newscate');
    foreach ($data as $key=>$value){
        $where['id']=$value['InformationType'];
        $type=$cate->where($where)->select();
        $data[$key]['InformationType']=$type[0]['catename'];
    }
    $count=$news->count();
    $page=new \Think\Page($count,25);
    $page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $page->setConfig('prev', '上一页');
    $page->setConfig('next', '下一页');
    $page->setConfig('last', '末页');
    $page->setConfig('first', '首页');
    $page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $page->lastSuffix = false;//最后一页不显示为总页数
    $show=$page->show();
    $this->assign("news",$data);
    $this->assign("page",$show);
    $this->display();
    
}
public function Newsedit(){
    $newsid['id']=$_REQUEST['InformationID'];
    $news=new Model("news");
    $newscate=new Model("newscate");
    $data_cate=$newscate->select();
    $data_news=$news->where($newsid)->select();
    $this->assign("list",$data_cate);
    $res=$this->assign("newsOnSelected",$data_news);
    //dump($res);
    $this->display();
}
public function editnews(){
    $news=new Model('news');
    
    if($_POST['fid']){
        $data['id']=$_POST['id'];
        $data["InformationTitle"] =  $_POST["InformationTitle"];
        $data["InformationContent"] =  $_POST["InformationContent"];
        $data["InformationCont"] = $_POST["InformationCont"];
        $data["InformationOrder"] =  $_POST["InformationOrder"];
        $data["IsTop"] =  $_POST["IsTop"];
        $data["IsDes"] =  $_POST["IsDes"];
        $data["InformationAuthor"] =  $_POST["InformationAuthor"];
        $data["InformationType"] =  $_POST['fid'];
        $data["InformationUpdate"]=date('Y-m-d H:i:s',time());
        if($_FILES['pcc'][tmp_name]){
        $where['id']=$_POST['id'];
        $pic_stroge_name=$news->where($where)->select();
        $this->deletefile($pic_stroge_name);
        $info = $this->upload('news/');//商品图片保存在Uploads/news/目录
        if($info){
            $image = new \Think\Image();
            $picname=$info['savename'];
            $path="./Uploads/news/";
            $image->open($path.$picname);
            $image->thumb(250,200)->save($path.'s_'.$picname);
            $data['InformationBigPic']=$picname; //产品大图
            $data['InformationPic']='s_'.$picname;//产品缩略图
        }
        else{$this->error("保存图片失败");}
        }
        $result=$news->save($data);
        $url=U("NewsList");
        $this->assign("jumpUrl",$url);
        if (!$result)  {$this->error("没有添加任何内容，");}
        $this->success("修改成功");
    }
    else{$this->error("须填写类别");}
}
public function deletefile($pic_stroge_name){
    $pic_stroge_name_bigpic=$pic_stroge_name[0]['InformationBigPic'];
    $pic_stroge_name_thumb=$pic_stroge_name[0]['InformationPic'];
    $res1=unlink("./Uploads/news/".$pic_stroge_name_bigpic);
    $res2=unlink("./Uploads/news/".$pic_stroge_name_thumb);
    if(!$res1||!$res2){
        dump($pic_stroge_name_bigpic);
        $this->error('在修改图片的过程中删除原图片失败');}
}

}













