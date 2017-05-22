<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController {

    function _initialize(){
    	header("Content-type:text/html;charset=utf-8");
    }
 

//..........................................用户管理模块．..................................．．．．．．．．．．．．
	
  function MemberAdd(){ //用户基本资料
     session_start();
	 $this->check_logined();
	 $role=M('role');
     $roles=$role->order("RID")->select();
     $this->assign("role",$roles);
	 $this->display();
 }


  function add_reginfo(){   //增加用户	
	  session_start();
	  $this->check_logined();
	  $member=M('admin');	
	  $condition['UserName']=$_POST['UserName'];
	  $res=$member->where($condition)->find();
	  if($res){$this->error("该用户名已经存在，请重新输入！");}
	  
	  $condition=NULL;	   
	  $data['UserName']=$_POST['UserName'];
	  $data['Password']=md5($_POST['password']);
	  $data['Remark']=$_POST['remark'];
	  $result=$member->where($condition)->add($data);
	  $url=U("MemberFastList");	
	  $this->assign("jumpUrl",$url);	  	
      if($result !== false){
        $this->success("数据添加成功！");
      }else{
        $this->error("数据添加失败！");
      }
   }  
   
  function MemberPaw(){ //用户密码
     session_start();
	 $this->check_logined();
	 $user=M('admin');
	 $condition['UserName']=$_SESSION['Username'];;
     $us=$user->where($condition)->select();	
	 $this->assign("mempaw",$us);
	 $this->display();
   }
   function edit_regpaw(){   //修改用户密码	
	  session_start();
	  $this->check_logined();
	  $member=M('admin');	
	  $condition['UserName']=$_SESSION['Username'];
	  $member_paw=$member->where($condition)->find();
	  $paw=$member_paw['Password'];
	  if($member_paw['Password']!=md5($_POST['password'])){$this->error("原密码输入错误");}
	  $data['Password']=md5($_POST['newpassword']);
	  $result=$member->where($condition)->save($data);
      if($result !== false){
        $this->success("数据更新成功！");
      }else{
        $this->error("数据更新失败！");
      }
   }  
  
function MemberFastList(){      //会员管理页     
	 $this->check_logined();
	 Load('extend');
	 $newsList=M('admin');			
	  
// 判断查询条件		
	   if($_GET['KeyWord']){$condition['UserName'] = array("like","%$_GET[KeyWord]%");}
	   else{$condition=NULL; }
	
    import("ORG.Util.Page");// 导入分页类
    $count= $newsList->where($condition)->count();// 查询满足要求的总记录数
    $page = new \Think\Page($count,18);// 实例化分页类 传入总记录数和每页显示的录数
    $show = $page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $newsList_info = $newsList->where($condition)->order('UserID  asc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('memberlist',$newsList_info);		
    $this->assign("page",$show );
    $this->assign("pagestyle","green-black");
    $this->display(); 
 }	
function DelFastMember(){      //删除会员
     session_start();
	 $this->check_logined();
   	$newstype=M('admin');	
	$condition['UserID']=$_GET['UserID']; 
	$result = $newstype->where($condition)->delete();   
	$url=U("MemberFastList");	
	$this->assign("jumpUrl",$url);	  		
	if ($result !== false) 
	  $this->success("删除成功");
	else    
	   $this->error("修改失败");    
    }
function DelAllFastMember(){//删除所选会员	
    $this->check_logined();	
	$newstype=M('admin');	
	$aa=$_POST['arr'];
	//echo $aa;
	$InformationID=explode(",",$aa);
	foreach($InformationID as $val)	 {
		$condition['UserID']=$val;	
	    $result = $newstype->where($condition)->delete();   }		
	}	

	 	 
	
  function MemberFastQuery(){ //会员资料
     session_start();
	 $this->check_logined();
	 $user=M('admin');
	 $condition['UserID']=$_GET['UserID'];
     $us=$user->where($condition)->find();	
	 $this->assign("memlist",$us);
	 $this->display();
 }	
  function MemberFastEdit(){ //会员资料
     session_start();
	 $this->check_logined();

	 $user=M('admin');
	 $condition['UserID']=$_GET['UserID'];
     $us=$user->where($condition)->find();	

	 $this->assign("memlist",$us);
	 $this->display();
 }	

function EditMemberFast(){      //编辑快速注册会员资料
      $this->check_logined();
	  $fastregistry=M('admin');
	  $condition['UserID']=$_POST['UserID'];
	  $data["UserName"] = $_POST['UserName']; 
      IF($_POST['Password']){$data["Password"] = md5($_POST['Password']);}
	  $data["Remark"] = $_POST['remark']; 
	  $result = $fastregistry->where($condition)->save($data); 
      $url=U("MemberFastList");	
	  $this->assign("jumpUrl",$url);	  		
      if ($result !== false)   
	   $this->success("修改成功");
	  else    
	 $this->error("修改失败"); 	
    }	
	
 	
}	
	
?>