<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Think\Template\Driver\Mobile;

class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
   $this->display('home');
    }
   

    function connection(){
            $conres=mysql_connect("localhost","root","root");
            if(!$conres){exit("数据库链接失败");}
            $res=mysql_select_db("education",$conres);

        }
        //插入行 测试结果：INSERT INTOtable(name,id)VALUES('lee','2012107210')
    function add($table,$array){
                $key=join(",", array_keys($array));
                $value=join("','",array_values($array));
                $query="INSERT INTO".$table."(".$key.")"."VALUES('".$value."')";
                mysql_query($query);
            }
            //生成where;
    function concretion(&$value,$key){
                    $value=$key."='".$value."'";
                }
                //删除行 测试结果 DELETE FROMtableWHEREname='lee'ANDid='2012107210'
    function del($table,$where){
                    
                 array_walk($where, concretion);
                $concrete=join("AND", $where);
                $query="DELETE FROM".$table."WHERE".$concrete;
                $result=mysql_query($query);
                 $res=array();
                while ($row=mysql_fetch_array($result)){
                    array_push($res, $row);
                }
                return $res;
                    }
                    //更新 测试结果 UPDATEtableSETid='2012107210',name='lee'WHEREid='2012107210'
   function update($table,$data,$where){
                array_walk($where, concretion);
                array_walk($data, concretion);
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
    function select($table,$field="*",$where){
            array_walk($where, concretion);
            $where=join("AND", $where);
            if(is_array($field))
            {$field=join(",", $field);}
            if($where){$where="WHERE".$where;}
            $query="SELECT ".$field. " FROM ".$table.$where;
            $result=mysql_query($query);
            $res=array();
            while( $row = mysql_fetch_array($result)){
                 array_push($res, $row);
            }
            return $res;
            }
                            
    public function home(){
        $this->display();
    }
    public function share(){
        $news=new Model("news");
        $cate=new Model('newscate');
        $catedata=$cate->select();
        $this->assign("cate",$catedata);
        
        if($_REQUEST['act']=="shownews"){
        $where['id']=$_REQUEST['num'];
        $data=$news->where($where)->select();
        $data=$data[0];
        $this->assign("news",$data);
        $this->assign('act_show',"news");
        $this->display();
;
        }
        else  {
        if($_REQUEST['cate']){
        $where['InformationType']=$_REQUEST['cate'];
        $count=$news->where($where)->count();
        $data=$news->where($where)->page($_GET['p'],2)->select();
        }
        else {
            $count=$news->count();
            $data=$news->page($_GET['p'],2)->select();
            
        }
        $res=$this->assign('newsdata',$data);      
        $Page=new \Think\Page($count,2);
        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条新闻&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','第%TOTAL_PAGE%页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        $Page->lastSuffix = false;//最后一页不显示为总页数
        $show=$Page->show();
        $this->assign('page',$show);
        $this->assign("act_show","list");
        $this->assign('list',$data);

        $this->display();
        
        }
    }
    public function course(){
        //输出课程表
        $course=new Model("Course");
        $courselist=new Model('courselist');
        if($_GET['course'])
        {$where['id']=$_GET['course'];
         $where_2['coursename']=$_GET['course'];
        }
        else{
         $rank=$courselist->order("coursename")->select();
         $where['id']=$rank[0]['id'];
         $where_2['coursename']=$rank[0]['id'];
        }
        
        $list=$course->where($where_2)->order("section")  ->select();
        foreach ($list as $key => $value){
            $list[$key]['content']=explode("_", $value['content']);
        }
        $res=$this->assign("course",$list);
        $coursename=$courselist->where($where)->select();
        $coursename=$coursename[0];
        $this->assign("coursename",$coursename);
        //输出课程教师
        $teacher=new Model('teacher');
        $teacher_data=$teacher->select();
        $this->assign("teacher",$teacher_data);
        //输出style
        $style=new Model('style');
        $style_data=$style->select();
        $this->assign("style",$style_data);
        //输出环境
        $environment=new Model('environment_display_list');
        $environment_data=$environment->select();
        $this->assign("environment",$environment_data);
        $this->display();

    }
    public function teacher(){
        $teacher=new Model('teacher');
        $teacher_data=$teacher->select();
        $this->assign("teacher",$teacher_data);
        $this->display();
    }
    public function environment(){
        $case=new Model('environment_display_case');
        $list=new Model('environment_display_list');
        $case_data=$case->select();
        $list_data=$list->select();
        $this->assign("case",$case_data);
        $this->assign("list",$list_data);
        $this->display();
    }
    
    
    
    //留言信息
    
    
    
    public function EnrollProcess(){
          $this->connection();
          $course=$this->select("course");
          $courselist=$this->select("courselist");
          $this->assign("course",$course);
          $this->assign("courselist",$courselist);
          $this->display();
    }
    public function message(){
        $message=new Model('message');
        $res=$message->create();
        dump($res);
        $message->add();
        $this->display();
    }
    function ck_adlogin(){  //管理员登录
        session_start();
        $user=M('admin');
        $url=U("Admin/Index/index");
        //dump($_POST);exit;
        $condition['UserName']=$_POST['username'];
        $us=$user->where($condition)->find();
        	
    
    
        if(!$us){ $this->error("用户名错误！！");}
        if($us['Password']!=md5($_POST['password'])){$this->error("密码错误！！");}
        //if($_SESSION['verify'] != md5($_POST['verify'])){$this->error('验证码错误！'); }
        session('Username',$_POST['username']);
        $_SESSION['access_time']=time();
        $this->success("登录成功",$url);
    }
    public function Login(){
        $this->display();
    }
    
    function VerifyImg(){
        $config=array(
            'fontSize'  =>  15,              // 楠岃瘉鐮佸瓧浣撳ぇ灏�(p
            'imageH'    =>  30,               // 楠岃瘉鐮佸浘鐗囬珮搴�
            'imageW'    => 120,               // 楠岃瘉鐮佸浘鐗囧搴�
            'length'    =>  4,               // 楠岃瘉鐮佷綅鏁�
            'fontttf'   =>  '',              // 楠岃瘉鐮佸瓧浣擄紝涓嶈缃殢鏈鸿幏鍙�
            'bg'        =>  array(236, 236, 236),  // 鑳屾櫙棰滆壊
            'useImgBg'  =>  false,           // 浣跨敤鑳屾櫙鍥剧墖
            'useNoise'  =>  false,
            'useCurve'  =>  false,            // 鏄惁鐢绘贩娣嗘洸绾�
    
        );
        ob_clean();
        $verify=new \Think\Verify($config);
        $verify->entry();
    }
}