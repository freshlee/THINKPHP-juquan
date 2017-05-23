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

        dump($data);
        $this->assign("message",$data);
        
        $this->display();
    }
}