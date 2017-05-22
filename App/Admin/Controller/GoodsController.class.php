<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class GoodsController extends CommonController {

public function add() {
    $this->check_logined();
        $datanum = $_POST["datanum"];
        $course=new Model('Course');
        for ($i = 1; $i <= $datanum; $i++) {

            $name_AM_C_1="$i"."_AM_C_1";
            $name_AF_C_1="$i"."_AF_C_1";
            $name_PM_C_1="$i"."_PM_C_1";
            $name_AM_M_1="$i"."_AM_M_1";
            $name_AF_M_1="$i"."_AF_M_1";
            $name_PM_M_1="$i"."_PM_M_1";

            $name_AM_C_2="$i"."_AM_C_2";
            $name_AF_C_2="$i"."_AF_C_2";
            $name_PM_C_2="$i"."_PM_C_2";
            $name_AM_M_2="$i"."_AM_M_2";
            $name_AF_M_2="$i"."_AF_M_2";
            $name_PM_M_2="$i"."_PM_M_2";
            
            $name_method="$i"."_method";
            $name_outline="$i"."_outline";
            $name_content="$i"."_content";
            $name_listnum="$i"."_listnum";
            $listnum=$_POST[$name_listnum];
            $content="";
            for ($j=1;$j<=$listnum;$j++){
            $list_name=$name_content."_".$j;
            $pre=$j==1?"":"_";
            $content.=$pre.$_POST["$list_name"];
            }

            $data["content"]=$content;
            $data["method"]=$_POST[$name_method];
            $data["outline"]=$_POST[$name_outline];
            $data["AM_C_1"]=$_POST[$name_AM_C_1];
            $data["AF_C_1"]=$_POST[$name_AF_C_1];
            $data["PM_C_1"]=$_POST[$name_PM_C_1];
            $data["AM_M_1"]=$_POST[$name_AM_M_1];
            $data["AF_M_1"]=$_POST[$name_AF_M_1];
            $data["PM_M_1"]=$_POST[$name_PM_M_1];
            $data["AM_C_2"]=$_POST[$name_AM_C_2];
            $data["AF_C_2"]=$_POST[$name_AF_C_2];
            $data["PM_C_2"]=$_POST[$name_PM_C_2];
            $data["AM_M_2"]=$_POST[$name_AM_M_2];
            $data["AF_M_2"]=$_POST[$name_AF_M_2];
            $data["PM_M_2"]=$_POST[$name_PM_M_2];
            $data["coursename"]=$_POST["coursename"];
            $data["section"]=$i;
            $search['coursename']=$_POST["coursename"];
            $search['section']=$i;
        
            $info=$course->where($search)->select();
            
            if($info){
                $savewhere['id']=$info[0]['id'];
                $res=$course->where($savewhere)->save($data);
            }
            else{$res=$course->add($data);
            }
         
        }
        //删除多余section
        $target['coursename']=$_POST['coursename'];
        $destination=$course->where($target)->select();
        $length=sizeof($destination, 0);
        if($length&&$length>$_POST['datanum']){
        for($section=$_POST['datanum']+1;$section<=$length;$section++){
            $course->where("section =".$section)->delete();
        }
        }
           
        $courselist=new Model('courselist');
        $courselist_data=$courselist->select();
        $this->assign("courselist",$courselist_data);
        if($_REQUEST['data']){
            $where['coursename']=$_REQUEST['data'];
            $where2['id']=$_REQUEST['data'];
            $index=$courselist->where($where2)->select();
            $course_data=$course->where($where)->order("section")->select();
            
        }
        else { $course_data=null;}
        foreach ($course_data as $key => $value){
            $course_data[$key]['content']=explode("_", $value['content']);
        }

        $this->assign("course",$course_data);
        $this->assign("coursename",$index);
        $this->display();
   }
   
   //课程表单元删除
   public function coursemodify(){
       $course=new Model('course');
       if($_REQUEST['act']=="del"){
           $where['coursename']=$_POST['course'];
           $where['section']=$_POST['section'];
           $course->where($where)->delete();
       }
       
   }
public function courselist(){
    $courselist=new Model("courselist");
    $courselist_data=$courselist->select();
    $this->assign("courselist",$courselist_data);
    $coursecate=new Model("coursecate");
    $coursecate_data=$coursecate->select();
    $this->assign("coursecate",$coursecate_data);
    $this->display();
}
public function addcourselist(){
    $courselist=new Model("courselist");
    $courselist->create();
    $res=$courselist->add();
    if ($res){$this->success("添加课程成功");}
    else{$this->error("添加课程失败");}
}

public function addcoursecate(){
    $course=new Model("coursecate");
    $course->create();
    $res=$course->add();
    if ($res){$this->success("添加课程分类成功");}
    else{$this->error("添加课程分类失败");}    
}
public function delcourse(){
    $courselist=new Model('courselist');
    $course=new Model('course');
    $where1['id']=$_REQUEST['index'];
    $where2['coursename']=$_REQUEST['index'];
    $res1=$course->where($where2)->delete(); 
    $res2=$courselist->where($where1)->delete();
    if(($res1||$res1===0)&&($res2||$res2===0)){$this->redirect("courselist");}
    else{$this->error("删除失败");}
}

} 





?>