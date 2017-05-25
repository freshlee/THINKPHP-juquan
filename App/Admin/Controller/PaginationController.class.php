<?php
namespace Admin\Controller;

use Think\Model;
class PaginationController extends CommonController{
    public function teacher(){
        $course=new Model('courselist');
        $course_data=$course->select();
        $this->assign("course",$course_data);
        $teacher=new Model("teacher");
        $teacher_data=$teacher->select();
        foreach ($teacher_data as $key=>$value){
            $teacher_data[$key]['teacherfield']=explode("/", $value['teacherfield']);
            foreach ($teacher_data[$key]['teacherfield'] as $subkey=>$subvalue){
            $where['id']=$subvalue;
            $res=$course->where($where)->select();
            $teacher_data[$key]['teacherfield'][$subkey]=array();
            $teacher_data[$key]['teacherfield'][$subkey]['coursename']=$res[0]['coursename'];
            $teacher_data[$key]['teacherfield'][$subkey]['courseid']=$res[0]['id'];
            }
        }
        $this->assign("list",$teacher_data);
        $this->display();

    }
public
function modteacher() {
    $teacher = new Model('teacher');
    $data['teachername'] = $_POST['teachername'];
    $data['description'] = $_POST['description'];
    $data['teacherhonor'] =$_POST['teacherhonor'];
    $data['opinion'] =$_POST['opinion'];
    $data['experience'] =$_POST['experience'];
    $data['advantage'] =$_POST['advantage'];
    //如果是修改模式下，寻找修改位置。
    if($_REQUEST['act']=="mod"){
    $destination['id']=$_POST['id'];}
    foreach($_POST['teacherfield'] as $key =>$value) {
        if ($value) {
            $storage[$key] = $value;
        }
    }

    $data['teacherfield'] = join("/", $storage);
    if ($_FILES['pic']['tmp_name']) {
        if($_REQUEST['act']=="mod"){
            $origin_data=$teacher->where($destination)->find();
            $origin_filename=$origin_data['pic'];
            $origin_thumbfilename=$origin_data['pic_thumb'];
            unlink(".Uploads/teacher/".$origin_filename);
            unlink(".Uploads/teacher/".$origin_thumbfilename);
        }
        $res = $this ->upload("teacher/");
        if (!$res) {
            $this ->error('图片上传失败');
        }

        else {
            $image = new\Think\Image;
            $filename = $res[savename];
            $image ->open("./Uploads/teacher/".$filename);
            $thumb_filename = "s_".$filename;
            $image ->thumb(140, 140) ->save("./Uploads/teacher/".$thumb_filename);
            $data['pic'] = $filename;
            $data['pic_thumb'] = $thumb_filename;

        }
    }
    if($_REQUEST['act']=="mod"){
        $backfeed=$teacher->where($destination)->save($data);
    }
    else{$backfeed = $teacher ->add($data);}
    if ($backfeed||$backfeed===0) {
        $this ->redirect("teacher");

    } else {
       $this->error("上传失败");
        unlink("./Uploads/teacher/".$filename);
        unlink("./Uploads/teacher/".$thumb_filename);
    }

}
    public function del(){
        $teacher=new Model('teacher');
        $index['id']=$_REQUEST['index'];
        //删除图像文件
        $origin_data=$teacher->where($index)->find();
        $origin_filename=$origin_data['pic'];
        $origin_thumbfilename=$origin_data['pic_thumb'];
        unlink(".Uploads/teacher/".$origin_filename);
        unlink(".Uploads/teacher/".$origin_thumbfilename);
        //删除数据
        $index['id']=$_REQUEST['index'];
        
        $res=$teacher->where($index)->delete();
        if($res){
            $this->redirect("Pagination/teacher");
        }
        else {$this->error("删除失败");}
    }
    public function environment() {
        $case=new Model('environment_display_case');
        $list=new Model('environment_display_list');
        $case_data=$case->select();
        $list_data=$list->select();
        $this->assign("case",$case_data);
        $this->assign("list",$list_data);
        $this->display();
        
    }
    public function addEnvironmentCase(){
        $case=new Model('environment_display_case');
        $case->create();
        $res=$case->add();
        if($res){$this->redirect("environment");}
        else {$this->error('模块添加失败');}
            $this->display();
    }
    public function delEnvironmentCase(){
        $case=new Model('environment_display_case');
        $caselist=new Model('environmenmt_display_list');
        $where['id']=$_REQUEST['index'];
        $where2['listCase']=$_REQUEST['index'];
        $caselist->where($where2)->delete();
        $res=$case->where($where)->delete();
        if($res||$res===0){$this->redirect("environment");}
        else{$this->error("删除模块失败");}
    }
    //新增加环境
    public function addlist(){
        $list=new Model('environment_display_list');
        if($_REQUEST['act']=="mod"){
            $destination['id']=$_POST['id'];}
        $data['listName']=$_POST['listName'];
        $data['listCont']=$_POST['listCont'];
        $data['listCase']=$_POST['listCase'];
        $data['isTop']=$_POST['isTop'];
        if($_FILES['pic']['tmp_name']){
            if($_REQUEST['act']=="mod"){
                $origin_data=$list->where($destination)->find();
                $origin_filename=$origin_data['listPic'];
                $origin_thumbfilename=$origin_data['listPicThumb'];
                unlink(".Uploads/environment/".$origin_filename);
                unlink(".Uploads/environment/".$origin_thumbfilename);
            }
        $res=$this->upload("environment/");
        if(!$res){
            $this->error('图片上传失败');
        }
        else{
            $image=new\Think\Image;
            $filename=$res[savename];
            $image->open("./Uploads/environment/".$filename);
            $thumb_filename="s_".$filename;
            $image->thumb(140, 140)->save("./Uploads/environment/".$thumb_filename);
            $data['listPic']=$filename;
            $data['listPicThumb']=$thumb_filename;
        }
        }
        if($_REQUEST['act']=="mod"){
        $backfeed=$list->where($destination)->save($data);
    }
    else{$backfeed = $list ->add($data);}
        if ($backfeed||$backfeed===0) {

        $this ->redirect("environment");
    } else {
       $this->error("上传失败");
        unlink("./Uploads/environment/".$filename);
        unlink("./Uploads/environment/".$thumb_filename);
    }

    }
    //删除环境
    public function delenvironment(){
        $environment=new Model('environment_display_list');
        $where['id']=$_REQUEST['index'];
        //删除图像文件
        $origin_data=$environment->where($where)->find();
        $origin_filename=$origin_data['pic'];
        $origin_thumbfilename=$origin_data['pic_thumb'];
        unlink(".Uploads/environment/".$origin_filename);
        unlink(".Uploads/environment/".$origin_thumbfilename);
        //删除数据
        $res=$environment->where($where)->delete();
        if($res){$this->redirect("environment");}
        else{$this->error("删除失败");}
    }
    
    public function style(){
        $case=new Model('stylecase');
        $style=new Model('style');
        $style_data=$style->select();
        $case_data=$case->select();
        $this->assign("list",$style_data);
        $this->assign("case",$case_data);
        $this->display();
        
    }
    public function addStyleCase(){
        $case=new Model('stylecase');
        $case->create();
        $res=$case->add();
        if($res){$this->redirect("style");}
        else {$this->error('模块添加失败');}
        $this->display();
    }
    public function delStyleCase(){
        $case=new Model('stylecase');
        $where['id']=$_REQUEST['index'];
        $res=$case->where($where)->delete();
        if($res||$res===0){$this->redirect("style");}
        else{$this->error("删除模块失败");}
    }
    public function addstyle(){
        if($_REQUEST['act']=="mod"){
            $destination['id']=$_POST['id'];}
        $list=new Model('style');
        $list->create();
        $data['listCase']=$_POST['listCase'];
        $data['styleName']=$_POST['styleName'];
        $data['styleCont']=$_POST['styleCont'];
        if($_FILES['pic']['tmp_name']){
            if($_REQUEST['act']=="mod"){
                $origin_data=$list->where($destination)->find();
                $origin_filename=$origin_data['stylePic'];
                $origin_thumbfilename=$origin_data['stylePicThumb'];
                unlink(".Uploads/style/".$origin_filename);
                unlink(".Uploads/style/".$origin_thumbfilename);
            }
        $res=$this->upload("style/");
        if(!$res){
            $this->error('图片上传失败');
        }
        else{
            $image=new\Think\Image;
            $filename=$res[savename];
            $image->open("./Uploads/style/".$filename);
            $thumb_filename="s_".$filename;
            $image->thumb(140, 140)->save("./Uploads/style/".$thumb_filename);
            $data['stylePic']=$filename;
            $data['stylePicThumb']=$thumb_filename;
        }
        }
            if($_REQUEST['act']=="mod"){
        $backfeed=$list->where($destination)->save($data);
    }
    else{$backfeed = $list ->add($data);}
        if ($backfeed||$backfeed===0) {

        $this ->redirect("style");
    } else {
       $this->error("上传失败");
        unlink("./Uploads/style/".$filename);
        unlink("./Uploads/style/".$thumb_filename);
    }
    }
   public function delstyle(){
       $style=new Model('style');
       $where['id']=$_REQUEST['index'];
       //删除图像文件
       $origin_data=$style->where($where)->find();
       $origin_filename=$origin_data['pic'];
       $origin_thumbfilename=$origin_data['pic_thumb'];
       unlink(".Uploads/style/".$origin_filename);
       unlink(".Uploads/style/".$origin_thumbfilename);
       //删除数据
       $res=$style->where($where)->delete();
       if($res){$this->redirect("style");}
       else{$this->error(删除失败);}
   }
    
	public function upload($path){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 3145728 ;// 设置附件上传大小
		$upload->exts = array('jpg','gif','png','jpeg');// 设置附件上传类型
		$upload->rootPath = './Uploads/'; // 设置文件上传保存的根路径  
		$upload->savePath = $path; // 设置附件上传目录
		$upload->subName  = '';//子目录
		$upload->saveName = time().'_'.mt_rand();
		$info = $upload->uploadOne($_FILES['pic']);
		return $info;
	}

    
}