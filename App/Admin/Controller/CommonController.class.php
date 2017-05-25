<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
   public function check_logined(){       //检测是否已经登录
        session_start();
        $user=M('admin');
        $condition['UserName']=$_SESSION['Username'];
        $us=$user->where($condition)->find();
        //$this->success(U("/Home/Login/index"));
        $url=U("Home/Index/login");
        if(!$us){ $this->assign("jumpUrl",$url);$this->error("登录失败");}
    }
    public function returnurl(){
        $url=$_SERVER['HTTP_REFERER'];
        $url=explode("/", $url);
        $url=array_slice($url, -3);
        $res=implode("/", $url);
        $res=substr($res,0,strlen($res)-5);
        $this->redirect($res);
    }
    public function econnection(){
        $conres=mysql_connect("localhost","root","root");
        if(!$conres){exit("数据库链接失败");}
        $res=mysql_select_db("education",$conres);
        return $res;
    
    }
    //插入行 测试结果：INSERT INTOtable(name,id)VALUES('lee','2012107210')
    function eadd($table,$array){
        $this->econnection();
        $key=join(",", array_keys($array));
        $value=join("','",array_values($array));
        $query="INSERT INTO ".$table." ( ".$key." ) "."VALUES ( '".$value."' )";
        mysql_query($query);
    }
    //生成where;
    function econcretion(&$value,$key){
        $value=$key."='".$value."'";
    }
    //删除行 测试结果 DELETE FROMtableWHEREname='lee'ANDid='2012107210'
    function edel($table,$where){
        $this->econnection();
        array_walk($where,function(&$value,$key){
        $value=$key."='".$value."'";
    });
        $concrete=join("AND", $where);
        if($concrete){
            $concrete=" WHERE ".$concrete;
        }
        $query="DELETE FROM ".$table.$concrete;
        $res=mysql_query($query);
        return $res;
    }
    //更新 测试结果 UPDATEtableSETid='2012107210',name='lee'WHEREid='2012107210'
    function eupdate($table,$data,$where){
        $this->econnection();
        array_walk($where, function(&$value,$key){
        $value=$key."='".$value."'";
    });
        array_walk($data, function(&$value,$key){
        $value=$key."='".$value."'";
    });
        $where=join("AND", $where);
        $data=join(",", $data);
        $query="UPDATE".$table."SET".$data."WHERE".$where;
        $result=mysql_query($query);
        $res=array();
        while ($row=mysql_fetch_array($result)){
            array_push($res, $row);
        }
        return $res;
    }
    
    
    
    
    
    //查
    function eselect($table,$field="*",$where){
        $this->econnection();
        array_walk($where, function(&$value,$key){
        $value=$key."='".$value."'";
    });
        $where=join("AND", $where);
        if(is_array($field))
        {$field=join(",", $field);}
        if($where){$where=" WHERE ".$where;}
        $query="SELECT ".$field. " FROM ".$table.$where;
        $result=mysql_query($query);
        $res=array();
        while( $row = mysql_fetch_array($result)){
            array_push($res, $row);
        }
        return $res;
    }
}