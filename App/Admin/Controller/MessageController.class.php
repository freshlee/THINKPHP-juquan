<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController{
    function message(){
        $data=$this->eselect("message");
        foreach ($data as $key=>$value){
            $data[$key]['course']=explode("/", $value['course']);
            foreach ($data[$key]['course'] as $subkey=>$subvalue){
                $where['id']=$data[$key]['course'][$subkey];
                $res=$this->eselect("course","*", $where);
                $data[$key]['course'][$subkey]=$res[0]['coursename'];                 
            }
        }
        $this->assign("message",$data);        
        $this->display();
    }
    public function delmessage(){
    if (!$_REQUEST['id']){
        $this->error("非法操作，缺少ID请求");
    }
    else{$where['id']=$_REQUEST['id'];}
        $res=$this->edel("message", $where);
        if($res||$res===0){
            $this->redirect("message");
        }else {$this->error("删除失败");}
            
    }
}  
